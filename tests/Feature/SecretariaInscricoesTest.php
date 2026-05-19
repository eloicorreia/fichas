<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Mockery;
use Tests\TestCase;

class SecretariaInscricoesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config(['app.url' => 'http://localhost']);
        URL::forceRootUrl('http://localhost');
        $this->withoutVite();
    }

    public function test_usuario_com_inscricao_view_lista_inscricoes(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['nome' => 'Ana Listagem']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertOk()
            ->assertSee($inscricao->nome);
    }

    public function test_filtro_por_evento_id_retorna_apenas_inscricoes_daquele_evento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento(['numero' => 101, 'nome' => 'Evento Atual']);
        $outroEvento = $this->createEvento(['numero' => 102, 'nome' => 'Outro Evento']);

        $this->createInscricao($evento, ['nome' => 'Inscricao Correta']);
        $this->createInscricao($outroEvento, ['nome' => 'Inscricao Fora']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['evento_id' => $evento->id]))
            ->assertOk()
            ->assertSee('Inscricao Correta')
            ->assertDontSee('Inscricao Fora');
    }

    public function test_filtro_por_pagamento_confirmado_retorna_somente_confirmadas(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Pagamento Confirmado', 'pagamento_confirmado' => true]);
        $this->createInscricao($evento, ['nome' => 'Pagamento Pendente', 'pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['pagamento' => 'confirmado']))
            ->assertOk()
            ->assertSee('Pagamento Confirmado')
            ->assertDontSee('Pagamento Pendente');
    }

    public function test_filtro_por_pagamento_pendente_retorna_somente_pendentes(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Pessoa Confirmada', 'pagamento_confirmado' => true]);
        $this->createInscricao($evento, ['nome' => 'Pessoa Pendente', 'pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['pagamento' => 'pendente']))
            ->assertOk()
            ->assertSee('Pessoa Pendente')
            ->assertDontSee('Pessoa Confirmada');
    }

    public function test_filtro_pagamento_invalido_e_ignorado(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Valor Confirmado', 'pagamento_confirmado' => true]);
        $this->createInscricao($evento, ['nome' => 'Valor Pendente', 'pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['pagamento' => 'qualquer-coisa']))
            ->assertOk()
            ->assertSee('Valor Confirmado')
            ->assertSee('Valor Pendente');
    }

    public function test_evento_id_invalido_nao_quebra_a_tela(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Evento Id Seguro']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['evento_id' => 'abc']))
            ->assertOk()
            ->assertSee('Evento Id Seguro');
    }

    public function test_filtro_q_maior_que_cem_caracteres_nao_quebra_a_listagem(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Busca Longa Segura']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index', ['q' => str_repeat('a', 150)]))
            ->assertOk();
    }

    public function test_exportacao_global_respeita_filtros(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, ['nome' => 'Exportar Confirmada', 'pagamento_confirmado' => true]);
        $this->createInscricao($evento, ['nome' => 'Nao Exportar Pendente', 'pagamento_confirmado' => false]);

        $content = $this->actingAs($user)
            ->get(route('secretaria.inscricoes.export', ['pagamento' => 'confirmado']))
            ->assertOk()
            ->assertHeader('Content-Type', 'text/csv; charset=UTF-8')
            ->streamedContent();

        $this->assertStringContainsString('Exportar Confirmada', $content);
        $this->assertStringNotContainsString('Nao Exportar Pendente', $content);
    }

    public function test_exportacao_registra_log_especifico(): void
    {
        Log::spy();

        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);

        $this->actingAs($user)
            ->withHeader('User-Agent', 'FeatureTest/1.0')
            ->withServerVariables(['REMOTE_ADDR' => '203.0.113.10'])
            ->get(route('secretaria.inscricoes.export'))
            ->assertOk();

        Log::shouldHaveReceived('info')
            ->with('Exportação global de inscrições solicitada.', Mockery::on(
                fn (array $context): bool => $context['user_id'] === $user->id
                    && array_key_exists('filters', $context)
                    && $context['ip'] === '203.0.113.10'
                    && $context['user_agent'] === 'FeatureTest/1.0'
            ))
            ->once();
    }

    public function test_exportacao_por_evento_nao_exporta_inscricoes_de_outro_evento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento(['numero' => 201]);
        $outroEvento = $this->createEvento(['numero' => 202]);

        $this->createInscricao($evento, ['nome' => 'Dentro do Evento']);
        $this->createInscricao($outroEvento, ['nome' => 'Fora do Evento']);

        $content = $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.export', [
                'evento' => $evento,
                'evento_id' => $outroEvento->id,
            ]))
            ->assertOk()
            ->streamedContent();

        $this->assertStringContainsString('Dentro do Evento', $content);
        $this->assertStringNotContainsString('Fora do Evento', $content);
    }

    public function test_exportacao_preserva_acentos_virgula_e_quebra_de_linha(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento(['nome' => 'Evento São José']);

        $this->createInscricao($evento, [
            'nome' => 'João, da Silva',
            'cidade' => "Bauru\nCentro",
            'email' => 'joao@example.test',
        ]);

        $content = $this->actingAs($user)
            ->get(route('secretaria.inscricoes.export'))
            ->assertOk()
            ->streamedContent();

        $this->assertStringContainsString('Evento São José', $content);
        $this->assertStringContainsString('"João, da Silva"', $content);
        $this->assertStringContainsString("\"Bauru\nCentro\"", $content);
    }

    public function test_usuario_sem_inscricao_export_nao_consegue_exportar(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.export'))
            ->assertForbidden();
    }

    public function test_botao_exportar_fica_oculto_sem_permissao_de_exportacao(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertOk()
            ->assertDontSee('data-testid="exportar-inscricoes"', false);
    }

    public function test_botao_exportar_aparece_com_permissao_de_exportacao(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento();

        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertOk()
            ->assertSee('data-testid="exportar-inscricoes"', false);
    }

    public function test_link_exportacao_nao_contem_situacao_excluidas(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export', 'inscricao.restore']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['nome' => 'Inscricao Excluida Link Export']);
        $inscricao->delete();

        $content = $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', [
                'evento' => $evento,
                'situacao' => 'excluidas',
            ]))
            ->assertOk()
            ->assertSee('data-testid="exportar-inscricoes"', false)
            ->getContent();

        $this->assertStringContainsString(
            route('secretaria.eventos.inscricoes.export', $evento),
            $content
        );
        $this->assertStringNotContainsString(
            route('secretaria.eventos.inscricoes.export', [
                'evento' => $evento,
                'situacao' => 'excluidas',
            ]),
            $content
        );
    }

    public function test_botao_incluir_inscricao_nao_aparece_sem_create_ou_review(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertDontSee('data-testid="incluir-inscricao"', false);
    }

    public function test_botao_incluir_inscricao_aparece_com_inscricao_create(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('data-testid="incluir-inscricao"', false);
    }

    public function test_botao_alterar_nao_aparece_sem_inscricao_update_ou_review(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertDontSee('data-testid="alterar-inscricao"', false);
    }

    public function test_botao_alterar_aparece_com_inscricao_update(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('data-testid="alterar-inscricao"', false);
    }

    public function test_botao_excluir_nao_aparece_sem_inscricao_delete(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertDontSee('data-testid="excluir-inscricao"', false);
    }

    public function test_botao_excluir_aparece_com_inscricao_delete(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.delete']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('data-testid="excluir-inscricao"', false);
    }

    public function test_botao_alterar_pagamento_aparece_com_inscricao_payment(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('data-testid="alterar-pagamento-inscricao"', false);
    }

    public function test_botao_alterar_pagamento_nao_aparece_sem_inscricao_payment(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertDontSee('data-testid="alterar-pagamento-inscricao"', false);
    }

    public function test_formulario_pagamento_possui_confirmacao_visual(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee("onsubmit=\"return confirm('Deseja alterar o status de pagamento desta inscrição?');\"", false);
    }

    public function test_botao_pagamento_mostra_confirmar_quando_pendente(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('Confirmar pagamento')
            ->assertDontSee('Desmarcar pagamento');
    }

    public function test_botao_pagamento_mostra_desmarcar_quando_confirmado(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['pagamento_confirmado' => true]);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertOk()
            ->assertSee('Desmarcar pagamento')
            ->assertDontSee('Confirmar pagamento');
    }

    public function test_exportacao_protege_campos_contra_csv_injection(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento();

        $this->createInscricao($evento, [
            'nome' => '=HYPERLINK("https://example.test")',
            'email' => '+conta@example.test',
        ]);

        $content = $this->actingAs($user)
            ->get(route('secretaria.inscricoes.export'))
            ->assertOk()
            ->streamedContent();

        $this->assertStringContainsString('\'=HYPERLINK', $content);
        $this->assertStringContainsString('\'+conta@example.test', $content);
    }

    public function test_inscricao_create_permite_criar_sem_inscricao_review(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.create', $evento))
            ->assertOk();
    }

    public function test_inscricao_update_permite_editar_sem_inscricao_review(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]))
            ->assertOk();
    }

    public function test_usuario_sem_inscricao_delete_nao_consegue_excluir(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.review']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))
            ->assertForbidden();
    }

    public function test_nao_permite_excluir_inscricao_com_pagamento_confirmado(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.delete']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => true]);

        $this->actingAs($user)
            ->from(route('secretaria.eventos.inscricoes.index', $evento))
            ->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertSessionHasErrors('inscricao');

        $this->assertDatabaseHas('inscricoes_cursilho', ['id' => $inscricao->id]);
    }

    public function test_nao_permite_excluir_inscricao_finalizada(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.delete']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['finalizada_em' => now()]);

        $this->actingAs($user)
            ->from(route('secretaria.eventos.inscricoes.index', $evento))
            ->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento))
            ->assertSessionHasErrors('inscricao');

        $this->assertDatabaseHas('inscricoes_cursilho', ['id' => $inscricao->id]);
    }

    public function test_nao_permite_editar_ou_excluir_inscricao_vinculada_a_outro_evento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.review', 'inscricao.delete']);
        $evento = $this->createEvento(['numero' => 301]);
        $outroEvento = $this->createEvento(['numero' => 302]);
        $inscricao = $this->createInscricao($outroEvento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]))
            ->assertNotFound();

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]))
            ->assertNotFound();
    }

    public function test_formulario_administrativo_nao_exibe_base64_do_comprovante(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.review']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);
        $inscricao->forceFill([
            'pagamento_comprovante_base64' => 'data:application/pdf;base64,conteudo-sensivel',
        ])->save();

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]))
            ->assertOk()
            ->assertSee('Comprovante anexado')
            ->assertDontSee('pagamento_comprovante_base64')
            ->assertDontSee('conteudo-sensivel');
    }

    public function test_get_evento_label_attribute_funciona_com_relacionamento_e_fallback(): void
    {
        $evento = $this->createEvento(['numero' => 401, 'nome' => 'Cursilho Teste']);
        $inscricao = $this->createInscricao($evento);

        $this->assertSame('401 - Cursilho Teste', $inscricao->fresh()->evento_label);

        $fallback = new InscricaoCursilho([
            'nome' => 'Nome da Pessoa',
            'numero_evento' => 402,
            'tipo_evento' => 'ASSEMBLEIA',
        ]);

        $this->assertSame('402 - ASSEMBLEIA', $fallback->evento_label);
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
                [
                    'label' => $permission,
                    'module' => 'inscricao',
                    'active' => true,
                ]
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
        return Evento::query()->create(array_merge([
            'nome' => 'Cursilho',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => random_int(1000, 9999),
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth(),
            'termino_em' => now()->addMonth()->addDays(3),
        ], $attributes));
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function createInscricao(Evento $evento, array $attributes = []): InscricaoCursilho
    {
        $payload = array_merge([
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'status_ficha' => InscricaoCursilho::STATUS_CANDIDATO,
            'aceitou_termo' => true,
            'finalizada_em' => null,
            'nome' => 'Pessoa Teste '.random_int(1000, 9999),
            'data_nascimento' => '1990-01-01',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => (string) random_int(10000000000, 99999999999),
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

        $inscricao = InscricaoCursilho::query()->create(Arr::except($payload, [
            'pagamento_confirmado',
            'pagamento_data',
            'pagamento_comprovante_base64',
        ]));

        $protectedAttributes = Arr::only($payload, [
            'pagamento_confirmado',
            'pagamento_data',
            'pagamento_comprovante_base64',
        ]);

        if ($protectedAttributes !== []) {
            $inscricao->forceFill($protectedAttributes)->save();
        }

        return $inscricao;
    }
}
