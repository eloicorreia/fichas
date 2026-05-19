<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\InscricaoCursilho;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use RuntimeException;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class InscricaoSoftDeleteTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
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

    public function test_nao_recria_cpf_de_inscricao_soft_deleted_no_mesmo_evento(): void
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

    public function test_informa_erro_amigavel_quando_duplicidade_vem_de_registro_excluido(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.create']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['cpf' => '529.982.247-25']);
        $inscricao->delete();

        $this->actingAs($user)
            ->post(route('secretaria.eventos.inscricoes.store', $evento), $this->inscricaoPayload([
                'cpf' => '529.982.247-25',
            ]))
            ->assertSessionHasErrors([
                'cpf' => 'Já existe uma inscrição excluída para este CPF neste evento. Restaure a inscrição existente antes de reutilizar o CPF.',
            ]);
    }

    public function test_migration_fk_falha_de_forma_controlada_com_inscricao_orfa(): void
    {
        $migration = include database_path('migrations/2026_05_18_000003_add_evento_foreign_key_to_inscricoes_cursilho.php');
        $originalConnection = config('database.default');
        $database = tempnam(sys_get_temp_dir(), 'inscricoes-orfas-');

        config([
            'database.default' => 'inscricoes_orfas',
            'database.connections.inscricoes_orfas' => [
                'driver' => 'sqlite',
                'database' => $database,
                'prefix' => '',
                'foreign_key_constraints' => true,
            ],
        ]);

        DB::purge('inscricoes_orfas');

        try {
            Schema::create('eventos', function ($table): void {
                $table->id();
            });

            Schema::create('inscricoes_cursilho', function ($table): void {
                $table->id();
                $table->unsignedBigInteger('evento_id');
            });

            DB::table('inscricoes_cursilho')->insert(['evento_id' => 999999]);

            $this->expectException(RuntimeException::class);
            $this->expectExceptionMessage('existem 1 inscrição(ões) órfã(s)');

            $migration->up();
        } finally {
            DB::disconnect('inscricoes_orfas');
            config(['database.default' => $originalConnection]);

            if (is_string($database) && file_exists($database)) {
                unlink($database);
            }
        }
    }

    public function test_fk_e_criada_quando_nao_ha_orfaos(): void
    {
        $foreignKeys = collect(DB::select('PRAGMA foreign_key_list(inscricoes_cursilho)'));

        $this->assertTrue($foreignKeys->contains(
            fn (object $key): bool => $key->table === 'eventos' && $key->from === 'evento_id' && $key->to === 'id'
        ));
    }

    public function test_nao_cria_inscricao_com_evento_inexistente(): void
    {
        $this->expectException(QueryException::class);

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

    public function test_campos_normalizados_nao_sao_mass_assignable(): void
    {
        $evento = $this->createEvento();

        $inscricao = InscricaoCursilho::query()->create($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'cpf_normalizado' => '00000000000',
            'telefone_normalizado' => '000',
            'nome_normalizado' => 'forjado',
        ]));

        $this->assertSame('52998224725', $inscricao->fresh()->cpf_normalizado);
        $this->assertSame('11999999999', $inscricao->fresh()->telefone_normalizado);
        $this->assertNotSame('forjado', $inscricao->fresh()->nome_normalizado);
    }

    public function test_campos_normalizados_sao_recalculados_ao_salvar(): void
    {
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento);

        $inscricao->update([
            'cpf' => '111.444.777-35',
            'telefone' => '(11) 98888-7777',
            'nome' => 'Nome Normalizado',
        ]);

        $inscricao->refresh();

        $this->assertSame('11144477735', $inscricao->cpf_normalizado);
        $this->assertSame('11988887777', $inscricao->telefone_normalizado);
        $this->assertSame('nome normalizado', $inscricao->nome_normalizado);
    }
}
