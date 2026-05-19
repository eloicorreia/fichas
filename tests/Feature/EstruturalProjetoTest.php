<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EstruturalProjetoTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config(['app.url' => 'http://localhost']);
        URL::forceRootUrl('http://localhost');
        $this->withoutVite();
    }

    public function test_delete_permitido_faz_soft_delete(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.delete']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        $this->assertSoftDeleted('inscricoes_cursilho', ['id' => $inscricao->id]);
    }

    public function test_soft_deleted_nao_aparece_na_listagem(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['nome' => 'Inscricao Excluida']);

        $inscricao->delete();

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertOk()
            ->assertDontSee('Inscricao Excluida');
    }

    public function test_soft_deleted_nao_aparece_na_exportacao(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Inscricao Ativa']);
        $excluida = $this->createInscricao($evento, ['nome' => 'Inscricao Export Excluida']);
        $excluida->delete();

        $content = $this->actingAs($user)
            ->get(route('secretaria.inscricoes.export'))
            ->assertOk()
            ->streamedContent();

        $this->assertStringContainsString('Inscricao Ativa', $content);
        $this->assertStringNotContainsString('Inscricao Export Excluida', $content);
    }

    public function test_cpf_duplicado_continua_bloqueado_apos_soft_delete(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['cpf' => '529.982.247-25']);
        $inscricao->delete();

        $this->actingAs($user)
            ->from(route('secretaria.eventos.inscricoes.create', $evento))
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '529.982.247-25',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.create', $evento))
            ->assertSessionHasErrors('cpf');
    }

    public function test_nao_cria_inscricao_com_evento_inexistente(): void
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        InscricaoCursilho::query()->create($this->rawInscricaoPayload([
            'evento_id' => 999999,
        ]));
    }

    public function test_nao_exclui_evento_com_inscricoes_vinculadas(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', ['id' => $evento->id]);
    }

    public function test_relacionamento_evento_funciona(): void
    {
        $evento = $this->createEvento(['nome' => 'Evento Relacionado']);
        $inscricao = $this->createInscricao($evento);

        $this->assertTrue($inscricao->evento->is($evento));
    }

    public function test_admin_nao_cria_cpf_duplicado_no_mesmo_evento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '52998224725',
            ]))
            ->assertSessionHasErrors('cpf');
    }

    public function test_admin_cria_mesmo_cpf_em_evento_diferente(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento(['numero' => 501]);
        $outroEvento = $this->createEvento(['numero' => 502]);
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $outroEvento), $this->inscricaoPayload([
                'cpf' => '52998224725',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $outroEvento));
    }

    public function test_admin_update_mantem_proprio_cpf(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), $this->inscricaoPayload([
                'cpf' => '52998224725',
                'nome' => 'Nome Atualizado',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));
    }

    public function test_admin_update_nao_troca_para_cpf_de_outra_inscricao_do_mesmo_evento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);
        $inscricao = $this->createInscricao($evento, ['cpf' => '111.444.777-35']);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), $this->inscricaoPayload([
                'cpf' => '52998224725',
            ]))
            ->assertSessionHasErrors('cpf');
    }

    public function test_admin_rejeita_cpf_invalido(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '111.111.111-11',
            ]))
            ->assertSessionHasErrors('cpf');
    }

    public function test_admin_aceita_cpf_valido_com_mascara(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '529.982.247-25',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));
    }

    public function test_admin_aceita_cpf_valido_sem_mascara(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '52998224725',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));
    }

    public function test_fluxo_publico_e_admin_seguem_mesma_regra_de_cpf(): void
    {
        $evento = $this->createEvento(['numero' => 777]);

        $this->get(route('cursilho.start', [
            'publicoEvento' => 'homens',
            'numero' => $evento->numero,
        ]));

        $this->post(route('cursilho.passo.1.store', [
            'publicoEvento' => 'homens',
            'numero' => $evento->numero,
        ]), ['agree' => '1']);

        $this->post(route('cursilho.passo.2.store', [
            'publicoEvento' => 'homens',
            'numero' => $evento->numero,
        ]), [
            'nome' => 'Participante',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '111.111.111-11',
        ])->assertSessionHasErrors('cpf');
    }

    public function test_admin_nao_altera_pagamento_comprovante_base64(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);
        $inscricao->forceFill(['pagamento_comprovante_base64' => 'original'])->save();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), $this->inscricaoPayload([
                'pagamento_comprovante_base64' => 'alterado',
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        $this->assertSame('original', $inscricao->fresh()->pagamento_comprovante_base64);
    }

    public function test_comprovante_nao_e_mass_assignable(): void
    {
        $evento = $this->createEvento();

        $inscricao = InscricaoCursilho::query()->create($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'pagamento_comprovante_base64' => 'sensivel',
        ]));

        $this->assertNull($inscricao->fresh()->pagamento_comprovante_base64);
    }

    public function test_pagamento_confirmado_so_muda_por_fluxo_autorizado(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), $this->inscricaoPayload([
                'pagamento_confirmado' => true,
            ]))
            ->assertForbidden();

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
    }

    public function test_evento_view_nao_acessa_create_edit_update_delete(): void
    {
        $user = $this->userWithPermissions(['evento.view']);
        $evento = $this->createEvento();

        $this->actingAs($user)->get(route('secretaria.eventos.create'))->assertForbidden();
        $this->actingAs($user)->get(route('secretaria.eventos.edit', $evento))->assertForbidden();
        $this->actingAs($user)->put(route('secretaria.eventos.update', $evento), $this->eventoPayload())->assertForbidden();
        $this->actingAs($user)->delete(route('secretaria.eventos.destroy', $evento))->assertForbidden();
    }

    public function test_evento_create_cria(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayload(['numero' => 888]))
            ->assertRedirect(route('secretaria.eventos.index'));
    }

    public function test_evento_update_edita(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayload(['nome' => 'Evento Editado']))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', ['id' => $evento->id, 'nome' => 'Evento Editado']);
    }

    public function test_evento_delete_exclui(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseMissing('eventos', ['id' => $evento->id]);
    }

    public function test_permission_seeder_nao_remove_permissao_customizada_da_secretaria(): void
    {
        $role = Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);
        $custom = Permission::query()->create(['name' => 'custom.keep', 'label' => 'Custom', 'module' => 'custom', 'active' => true]);
        $role->permissions()->attach($custom->id);

        $this->seed(PermissionSeeder::class);

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'custom.keep')->exists());
    }

    public function test_permission_seeder_adiciona_permissoes_padrao(): void
    {
        Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);

        $this->seed(PermissionSeeder::class);

        $this->assertDatabaseHas('permissions', ['name' => 'inscricao.view']);
        $this->assertTrue(Role::query()->where('name', 'secretaria')->first()->permissions()->where('permissions.name', 'inscricao.view')->exists());
    }

    public function test_permission_seeder_mantem_super_admin_com_todas(): void
    {
        $role = Role::query()->create(['name' => 'super-admin', 'label' => 'Super Admin', 'active' => true]);
        Permission::query()->create(['name' => 'custom.all', 'label' => 'Custom', 'module' => 'custom', 'active' => true]);

        $this->seed(PermissionSeeder::class);

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'custom.all')->exists());
    }

    public function test_forgot_nao_revela_se_email_existe(): void
    {
        $this->post(route('secretaria.password.email'), ['email' => 'ninguem@example.test'])
            ->assertSessionHas('status');
    }

    public function test_forgot_gera_token_para_usuario_existente_e_envia_email(): void
    {
        Notification::fake();
        $user = User::factory()->create(['email' => 'secretaria@example.test']);

        $this->post(route('secretaria.password.email'), ['email' => $user->email])
            ->assertSessionHas('status');

        $this->assertDatabaseHas('password_reset_tokens', ['email' => $user->email]);
        Notification::assertSentTo($user, \App\Notifications\SecretariaResetPasswordNotification::class);
    }

    public function test_reset_com_token_valido_altera_senha(): void
    {
        $user = User::factory()->create(['email' => 'reset@example.test']);
        $token = Password::createToken($user);

        $this->post(route('secretaria.password.update'), [
            'email' => $user->email,
            'token' => $token,
            'password' => 'nova-senha-segura',
            'password_confirmation' => 'nova-senha-segura',
        ])->assertRedirect(route('secretaria.login'));

        $this->assertTrue(Hash::check('nova-senha-segura', $user->fresh()->password));
    }

    public function test_reset_com_token_invalido_falha(): void
    {
        $user = User::factory()->create(['email' => 'reset-invalido@example.test']);

        $this->post(route('secretaria.password.update'), [
            'email' => $user->email,
            'token' => 'token-invalido',
            'password' => 'nova-senha-segura',
            'password_confirmation' => 'nova-senha-segura',
        ])->assertSessionHasErrors('email');
    }

    public function test_busca_cpf_com_mascara_e_sem_mascara(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['nome' => 'CPF Buscavel', 'cpf' => '529.982.247-25']);

        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '529.982.247-25']))->assertSee('CPF Buscavel');
        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '52998224725']))->assertSee('CPF Buscavel');
    }

    public function test_busca_telefone_com_mascara_e_so_digitos(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['nome' => 'Telefone Buscavel', 'telefone' => '(11) 98888-7777']);

        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '(11) 98888-7777']))->assertSee('Telefone Buscavel');
        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '11988887777']))->assertSee('Telefone Buscavel');
    }

    public function test_ci_workflow_executa_comandos_obrigatorios(): void
    {
        $workflow = file_get_contents(base_path('.github/workflows/ci.yml'));

        $this->assertStringContainsString('composer validate', $workflow);
        $this->assertStringContainsString('composer check-platform-reqs', $workflow);
        $this->assertStringContainsString('php artisan test', $workflow);
        $this->assertStringContainsString('vendor/bin/pint --test', $workflow);
        $this->assertStringContainsString('npm ci', $workflow);
        $this->assertStringContainsString('npm run build', $workflow);
    }

    /**
     * @param  array<int, string>  $permissions
     */
    private function userWithPermissions(array $permissions): User
    {
        $user = User::factory()->create();

        $role = Role::query()->create([
            'name' => 'secretaria',
            'label' => 'Secretaria',
            'active' => true,
        ]);

        $permissionIds = collect($permissions)
            ->map(fn (string $permission): int => Permission::query()->updateOrCreate(
                ['name' => $permission],
                ['label' => $permission, 'module' => explode('.', $permission)[0], 'active' => true]
            )->id)
            ->all();

        $role->permissions()->sync($permissionIds);
        $user->roles()->sync([$role->id]);

        return $user;
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function createEvento(array $attributes = []): Evento
    {
        return Evento::query()->create(array_merge($this->eventoPayload(), $attributes));
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function eventoPayload(array $attributes = []): array
    {
        return array_merge([
            'nome' => 'Cursilho',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => random_int(1000, 9999),
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth()->format('Y-m-d H:i:s'),
            'termino_em' => now()->addMonth()->addDays(3)->format('Y-m-d H:i:s'),
        ], $attributes);
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function createInscricao(Evento $evento, array $attributes = []): InscricaoCursilho
    {
        return InscricaoCursilho::query()->create(array_merge($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'cpf' => (string) random_int(10000000000, 99999999999),
        ]), $attributes));
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function inscricaoPayload(array $attributes = []): array
    {
        return array_merge($this->rawInscricaoPayload(), $attributes);
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function rawInscricaoPayload(array $attributes = []): array
    {
        return array_merge([
            'evento_id' => 1,
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero_evento' => 1,
            'status_ficha' => InscricaoCursilho::STATUS_CANDIDATO,
            'aceitou_termo' => true,
            'finalizada_em' => null,
            'nome' => 'Pessoa Teste '.random_int(1000, 9999),
            'data_nascimento' => '1990-01-01',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'nome_mae' => 'Mae Teste',
            'telefone' => '11999999999',
            'cep' => '01000-000',
            'endereco' => 'Rua Teste',
            'bairro' => 'Centro',
            'cidade' => 'Sao Paulo',
            'estado' => 'SP',
            'participa_igreja' => 'SIM',
            'contato_familia_missa' => 'Contato',
            'alimentacao_especial' => 'Nenhuma',
            'padrinho_madrinha_contato' => 'Padrinho',
            'pagamento_confirmado' => false,
        ], $attributes);
    }
}
