<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\Fichas\AssembleiaInscricaoInterna;
use App\Mail\Fichas\AssembleiaParticipanteMail;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class AssembleiaPublicFlowTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_fluxo_completo_ate_finalizacao_envia_emails(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia();

        $this->completeAssembleiaFlow($evento);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.finalizado', $evento->numero));

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'nome' => 'PARTICIPANTE ASSEMBLEIA',
            'cpf_normalizado' => '52998224725',
        ]);

        Mail::assertSent(AssembleiaParticipanteMail::class);
        Mail::assertSent(AssembleiaInscricaoInterna::class);
    }

    public function test_validacao_de_cpf(): void
    {
        $evento = $this->createEventoAssembleia(['numero' => 8202]);

        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1']);

        $this->post(route('assembleia.passo.2.store', $evento->numero), $this->assembleiaStep2Payload([
            'cpf' => '111.111.111-11',
        ]))->assertSessionHasErrors('cpf');
    }

    public function test_validacao_de_data_de_nascimento(): void
    {
        $evento = $this->createEventoAssembleia(['numero' => 8203]);

        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1']);

        $this->post(route('assembleia.passo.2.store', $evento->numero), $this->assembleiaStep2Payload([
            'data_nascimento' => now()->addDay()->format('d/m/Y'),
        ]))->assertSessionHasErrors('data_nascimento');
    }

    public function test_evento_fechado_ou_inativo_nao_permite_inscricao(): void
    {
        $fechado = $this->createEventoAssembleia([
            'numero' => 8204,
            'status' => Evento::STATUS_FECHADO,
        ]);

        $this->get(route('assembleia.show', $fechado->numero))
            ->assertRedirect('/fichas/naodisponivel');

        $inativo = $this->createEventoAssembleia([
            'numero' => 8205,
            'ativo' => false,
        ]);

        $this->get(route('assembleia.show', $inativo->numero))
            ->assertRedirect('/fichas/naodisponivel');
    }

    public function test_evento_inexistente_redireciona_para_nao_disponivel(): void
    {
        $this->get(route('assembleia.show', 999999))
            ->assertRedirect('/fichas/naodisponivel');
    }

    public function test_assembleia_nao_finaliza_sem_passos_obrigatorios(): void
    {
        $evento = $this->createEventoAssembleia(['numero' => 8206]);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.passo.1', $evento->numero));

        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1']);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.passo.2', $evento->numero));
    }

    public function test_assembleia_bloqueia_cpf_duplicado_no_mesmo_evento(): void
    {
        $evento = $this->createEventoAssembleia(['numero' => 8207]);
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1']);

        $this->post(route('assembleia.passo.2.store', $evento->numero), $this->assembleiaStep2Payload([
            'cpf' => '52998224725',
        ]))->assertSessionHasErrors('cpf');
    }

    public function test_assembleia_sem_email_nao_envia_email_participante(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia(['numero' => 8208]);
        $this->completeAssembleiaFlow($evento, ['email' => '']);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.finalizado', $evento->numero));

        Mail::assertNotSent(AssembleiaParticipanteMail::class);
        Mail::assertSent(AssembleiaInscricaoInterna::class);
    }

    public function test_assembleia_falha_email_participante_nao_impede_finalizacao(): void
    {
        Mail::shouldReceive('to')->andReturnUsing(fn (string $to) => new class($to)
        {
            public function __construct(private string $to) {}

            public function send(object $mailable): void
            {
                if ($this->to === 'falha@example.test') {
                    throw new RuntimeException('SMTP indisponível');
                }
            }
        });

        $evento = $this->createEventoAssembleia(['numero' => 8209]);
        $this->completeAssembleiaFlow($evento, ['email' => 'falha@example.test']);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.finalizado', $evento->numero));

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '52998224725',
        ]);
    }

    public function test_assembleia_falha_email_interno_nao_impede_finalizacao(): void
    {
        Mail::shouldReceive('to')->andReturnUsing(fn (string $to) => new class($to)
        {
            public function __construct(private string $to) {}

            public function send(object $mailable): void
            {
                if ($this->to === 'inscricao@mccbauru.com.br') {
                    throw new RuntimeException('SMTP indisponível');
                }
            }
        });

        $evento = $this->createEventoAssembleia(['numero' => 8210]);
        $this->completeAssembleiaFlow($evento);

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.finalizado', $evento->numero));

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '52998224725',
        ]);
    }

    public function test_assembleia_normaliza_nome_cpf_telefone_ao_finalizar(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia(['numero' => 8211]);
        $this->completeAssembleiaFlow($evento, [
            'nome' => '  Participante Normalizado  ',
            'cpf' => '52998224725',
        ]);

        $this->post(route('assembleia.finalizar', $evento->numero));

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'nome' => 'PARTICIPANTE NORMALIZADO',
            'cpf' => '529.982.247-25',
            'cpf_normalizado' => '52998224725',
            'telefone_normalizado' => null,
            'nome_normalizado' => 'participante normalizado',
        ]);
    }

    public function test_assembleia_bloqueia_cpf_criado_entre_passo_2_e_finalizacao(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia(['numero' => 8212]);
        $this->completeAssembleiaFlow($evento, [
            'cpf' => '529.982.247-25',
        ]);

        $this->createInscricao($evento, [
            'nome' => 'Inscricao Concorrente Assembleia',
            'cpf' => '529.982.247-25',
        ]);

        $this->from(route('assembleia.revisao', $evento->numero))
            ->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.revisao', $evento->numero))
            ->assertSessionHasErrors('cpf');

        $this->assertDatabaseCount('inscricoes_cursilho', 1);
        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'nome' => 'Inscricao Concorrente Assembleia',
            'cpf_normalizado' => '52998224725',
        ]);
    }

    public function test_assembleia_trata_violacao_de_indice_unico_ao_finalizar(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia(['numero' => 8213]);
        $this->completeAssembleiaFlow($evento, [
            'nome' => 'Participante Race Assembleia',
            'cpf' => '390.533.447-05',
        ]);

        DB::unprepared(<<<'SQL'
            CREATE TRIGGER inscricoes_cursilho_race_assembleia
            BEFORE INSERT ON inscricoes_cursilho
            WHEN NEW.nome = 'PARTICIPANTE RACE ASSEMBLEIA'
            BEGIN
                SELECT RAISE(ABORT, 'UNIQUE constraint failed: inscricoes_cursilho.evento_id, inscricoes_cursilho.cpf_normalizado');
            END;
        SQL);

        $this->from(route('assembleia.revisao', $evento->numero))
            ->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.revisao', $evento->numero))
            ->assertSessionHasErrors([
                'cpf' => 'Já existe uma inscrição para este CPF neste evento.',
            ]);

        $this->assertDatabaseMissing('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '39053344705',
        ]);
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function createEventoAssembleia(array $overrides = []): Evento
    {
        return $this->createEvento(array_merge([
            'nome' => 'Assembleia Teste',
            'tipo_evento' => Evento::TIPO_EVENTO_ASSEMBLEIA,
            'publico_evento' => 'ASSEMBLEIA',
            'numero' => 8201,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
        ], $overrides));
    }

    private function startAssembleia(Evento $evento): void
    {
        $this->get(route('assembleia.show', $evento->numero))
            ->assertRedirect(route('assembleia.passo.1', $evento->numero));
    }

    private function completeAssembleiaFlow(Evento $evento, array $step2Overrides = []): void
    {
        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1'])
            ->assertRedirect(route('assembleia.passo.2', $evento->numero));
        $this->post(route('assembleia.passo.2.store', $evento->numero), $this->assembleiaStep2Payload($step2Overrides))
            ->assertRedirect(route('assembleia.revisao', $evento->numero));
    }

    /**
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function assembleiaStep2Payload(array $overrides = []): array
    {
        return array_merge([
            'nome' => 'Participante Assembleia',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'email' => 'assembleia@example.test',
            'cep' => '17000-000',
            'endereco' => 'Rua Assembleia',
            'bairro' => 'Centro',
            'cidade' => 'Bauru',
            'estado' => 'SP',
            'paroquia' => 'Sao Paulo Apostolo',
        ], $overrides);
    }
}
