<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class SecretariaAuthorizationTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_visitante_recebe_redirect_para_login_em_rotas_criticas(): void
    {
        $this->get(route('secretaria.eventos.index'))
            ->assertRedirect(route('secretaria.login'));

        $this->get(route('secretaria.inscricoes.index'))
            ->assertRedirect(route('secretaria.login'));
    }

    public function test_usuario_sem_role_secretaria_ou_super_admin_nao_acessa_secretaria(): void
    {
        $user = $this->userWithRoleAndPermissions('visitante', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertForbidden();
    }

    public function test_usuario_com_role_sem_permissao_recebe_403(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', []);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertForbidden();
    }

    public function test_usuario_com_permissao_correta_acessa_rota(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertOk();
    }

    public function test_usuario_com_role_mas_sem_permissao_critica_nao_acessa_inscricoes(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertForbidden();
    }

    public function test_rotas_criticas_negam_usuario_sem_permissao_e_nao_persistem(): void
    {
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);
        $deletedInscricao = $this->createInscricao($evento, ['cpf' => '111.444.777-35']);
        $deletedInscricao->delete();
        $role = Role::query()->create(['name' => 'alvo-role', 'label' => 'Alvo Role', 'active' => true]);
        $permission = Permission::query()->create(['name' => 'alvo.permission', 'label' => 'Alvo Permission', 'module' => 'alvo', 'active' => true]);
        $targetUser = User::factory()->create(['email' => 'alvo-user@example.test']);

        $secretariaSemPermissao = $this->userWithRoleAndPermissions('secretaria', []);
        $superAdminSemPermissao = $this->userWithRoleAndPermissions('super-admin', []);

        $this->actingAs($secretariaSemPermissao)->get(route('secretaria.eventos.index'))->assertForbidden();
        $this->actingAs($secretariaSemPermissao)->get(route('secretaria.eventos.create'))->assertForbidden();
        $this->actingAs($secretariaSemPermissao)->post(route('secretaria.eventos.store'), $this->eventoPayload(['numero' => 7702]))->assertForbidden();
        $this->actingAs($secretariaSemPermissao)->get(route('secretaria.eventos.edit', $evento))->assertForbidden();
        $this->actingAs($secretariaSemPermissao)->put(route('secretaria.eventos.update', $evento), $this->eventoPayload(['nome' => 'Nao Persistir']))->assertForbidden();
        $this->actingAs($secretariaSemPermissao)->delete(route('secretaria.eventos.destroy', $evento))->assertForbidden();

        $this->assertDatabaseMissing('eventos', ['numero' => 7702]);
        $this->assertDatabaseHas('eventos', ['id' => $evento->id, 'nome' => $evento->nome]);

        $this->actingAs($secretariaSemPermissao)->get(route('secretaria.inscricoes.index'))->assertForbidden();

        $secretariaComInscricaoView = $this->userWithRoleAndPermissions('secretaria', ['inscricao.view']);

        $this->actingAs($secretariaComInscricaoView)->get(route('secretaria.eventos.inscricoes.create', $evento))->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->post(route('secretaria.eventos.inscricoes.store', $evento), [])->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->get(route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]))->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), [])->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->put(route('secretaria.eventos.inscricoes.restore', [$evento, $deletedInscricao]))->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->get(route('secretaria.inscricoes.export'))->assertForbidden();
        $this->actingAs($secretariaComInscricaoView)->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
            'pagamento_confirmado' => true,
        ])->assertForbidden();

        $this->assertSame(2, InscricaoCursilho::withTrashed()->count());
        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
        $this->assertTrue($deletedInscricao->fresh()->trashed());

        $this->actingAs($superAdminSemPermissao)->get(route('secretaria.roles.index'))->assertForbidden();
        $this->actingAs($superAdminSemPermissao)->get(route('secretaria.permissions.index'))->assertForbidden();
        $this->actingAs($superAdminSemPermissao)->get(route('secretaria.users.index'))->assertForbidden();

        $superAdminComViews = $this->userWithRoleAndPermissions('super-admin', [
            'role.view',
            'permission.view',
            'usuario.view',
        ]);

        $this->actingAs($superAdminComViews)->post(route('secretaria.roles.store'), ['name' => 'sem-permissao', 'label' => 'Sem Permissao', 'active' => true])->assertForbidden();
        $this->actingAs($superAdminComViews)->put(route('secretaria.roles.update', $role), ['name' => 'role-alterada', 'label' => 'Role Alterada', 'active' => true])->assertForbidden();
        $this->actingAs($superAdminComViews)->delete(route('secretaria.roles.destroy', $role))->assertForbidden();

        $this->actingAs($superAdminComViews)->post(route('secretaria.permissions.store'), ['name' => 'sem.permission', 'label' => 'Sem Permission', 'module' => 'sem', 'active' => true])->assertForbidden();
        $this->actingAs($superAdminComViews)->put(route('secretaria.permissions.update', $permission), ['name' => 'permission.alterada', 'label' => 'Permission Alterada', 'module' => 'permission', 'active' => true])->assertForbidden();
        $this->actingAs($superAdminComViews)->delete(route('secretaria.permissions.destroy', $permission))->assertForbidden();

        $this->actingAs($superAdminComViews)->post(route('secretaria.users.store'), [])->assertForbidden();
        $this->actingAs($superAdminComViews)->put(route('secretaria.users.update', $targetUser), [])->assertForbidden();

        $this->assertDatabaseHas('roles', ['id' => $role->id, 'name' => 'alvo-role']);
        $this->assertDatabaseHas('permissions', ['id' => $permission->id, 'name' => 'alvo.permission']);
        $this->assertDatabaseHas('users', ['id' => $targetUser->id, 'email' => 'alvo-user@example.test']);
        $this->assertDatabaseMissing('roles', ['name' => 'sem-permissao']);
        $this->assertDatabaseMissing('permissions', ['name' => 'sem.permission']);
    }

    /**
     * @param  array<int, string>  $permissions
     */
    private function userWithRoleAndPermissions(string $roleName, array $permissions): User
    {
        $user = User::factory()->create();
        $role = Role::query()->firstOrCreate(
            ['name' => $roleName],
            ['label' => ucfirst($roleName), 'active' => true]
        );

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
        return Evento::query()->create($this->eventoPayload($attributes));
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function eventoPayload(array $attributes = []): array
    {
        return array_merge([
            'nome' => 'Evento Autorizacao',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 7701,
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
        return InscricaoCursilho::query()->create(array_merge([
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'status_ficha' => InscricaoCursilho::STATUS_CANDIDATO,
            'aceitou_termo' => true,
            'finalizada_em' => null,
            'nome' => 'Pessoa Autorizacao '.random_int(1000, 9999),
            'data_nascimento' => '1990-01-01',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'nome_mae' => 'Mae Teste',
            'telefone' => '11999999999',
            'cep' => '01000000',
            'endereco' => 'Rua Teste',
            'bairro' => 'Centro',
            'cidade' => 'Sao Paulo',
            'estado' => 'SP',
            'participa_igreja' => 'SIM',
            'contato_familia_missa' => 'Contato',
            'alimentacao_especial' => 'Nenhuma',
            'padrinho_madrinha_contato' => 'Padrinho',
        ], $attributes));
    }
}
