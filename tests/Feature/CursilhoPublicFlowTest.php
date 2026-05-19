<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\Fichas\CursilhoInscricaoInternaMail;
use App\Mail\Fichas\CursilhoParticipanteMail;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class CursilhoPublicFlowTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_fluxo_completo_de_candidato_solteiro_ate_finalizacao(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho();

        $this->completeCursilhoFlow($evento, [
            'nome' => 'Candidato Solteiro',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'email' => 'solteiro@example.test',
        ]);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'nome' => 'CANDIDATO SOLTEIRO',
            'cpf_normalizado' => '52998224725',
            'estado_civil' => 'SOLTEIRO',
        ]);

        Mail::assertSent(CursilhoParticipanteMail::class);
        Mail::assertSent(CursilhoInscricaoInternaMail::class);
    }

    public function test_fluxo_completo_de_candidato_casado_exige_dados_de_casamento(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7102]);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Candidato Casado',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'CASADO',
            'cpf' => '111.444.777-35',
        ]);

        $this->postCursilhoStep(3, $evento, [])
            ->assertSessionHasErrors(['data_casamento', 'cidade_casou', 'igreja_casou']);

        $this->postCursilhoStep(3, $evento, [
            'data_casamento' => '02/01/2015',
            'cidade_casou' => 'Bauru',
            'igreja_casou' => 'Sao Paulo Apostolo',
        ])->assertRedirect();

        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload());
        $this->postCursilhoStep(6, $evento, $this->cursilhoStep6Payload());
        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '11144477735',
            'estado_civil' => 'CASADO',
            'cidade_casou' => 'Bauru',
            'igreja_casou' => 'SAO PAULO APOSTOLO',
        ]);
    }

    public function test_participa_igreja_sim_exige_pastoral_e_paroquia(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7103]);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Participante Igreja',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '390.533.447-05',
        ]);
        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload([
            'participa_igreja' => 'SIM',
        ]));

        $this->postCursilhoStep(5, $evento, [
            'paroquia' => '',
            'participa_pastoral' => 'SIM',
            'quais_pastorais' => '',
        ])->assertSessionHasErrors('paroquia');

        $this->postCursilhoStep(5, $evento, [
            'paroquia' => 'Sao Paulo Apostolo',
            'participa_pastoral' => 'SIM',
            'quais_pastorais' => '',
        ])->assertSessionHasErrors('quais_pastorais');
    }

    public function test_nao_permite_revisar_ou_finalizar_sem_passos_obrigatorios(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7104]);

        $this->get(route('cursilho.revisao', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect(route('cursilho.passo.1', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect(route('cursilho.passo.1', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
    }

    public function test_bloqueia_cpf_duplicado_no_mesmo_evento(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7105]);
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);

        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Duplicado',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '52998224725',
        ])->assertRedirect(route('cursilho.inscricaoconfirmada', ['publicoEvento' => 'homens']));
    }

    public function test_evento_fechado_ou_inativo_nao_permite_inscricao(): void
    {
        $fechado = $this->createEventoCursilho([
            'numero' => 7106,
            'status' => Evento::STATUS_FECHADO,
        ]);

        $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $fechado->numero]))
            ->assertNotFound();

        $inativo = $this->createEventoCursilho([
            'numero' => 7107,
            'ativo' => false,
        ]);

        $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $inativo->numero]))
            ->assertNotFound();
    }

    public function test_evento_inexistente_retorna_erro_esperado(): void
    {
        $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => 999999]))
            ->assertNotFound();
    }

    public function test_start_by_publico_redireciona_para_passo_1_em_fichas(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7114]);

        $response = $this->get(route('cursilho.start_by_publico', ['publicoEvento' => 'homens']));

        $response->assertRedirect(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
        $this->assertStringStartsWith('/fichas/cursilho/', parse_url($response->headers->get('Location'), PHP_URL_PATH));

        $this->followingRedirects()
            ->get(route('cursilho.start_by_publico', ['publicoEvento' => 'homens']))
            ->assertOk()
            ->assertSee('Passo 1 de 6')
            ->assertSee("{$evento->numero}º Cursilho")
            ->assertSee("/fichas/cursilho/homens/{$evento->numero}/passo/1", false)
            ->assertDontSee('http://localhost/cursilho', false);
    }

    public function test_start_por_numero_redireciona_para_passo_1_em_fichas(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7115]);

        $response = $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));

        $response->assertRedirect(route('cursilho.passo.1', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
        $this->assertStringStartsWith('/fichas/cursilho/', parse_url($response->headers->get('Location'), PHP_URL_PATH));

        $this->followingRedirects()
            ->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk()
            ->assertSee('Passo 1 de 6')
            ->assertSee("{$evento->numero}º Cursilho")
            ->assertSee("/fichas/cursilho/homens/{$evento->numero}/passo/1", false)
            ->assertDontSee('http://localhost/cursilho', false);
    }

    public function test_cursilho_casado_nao_aceita_data_casamento_menor_que_nascimento(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7108]);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Candidato Casado',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'CASADO',
            'cpf' => '111.444.777-35',
        ]);

        $this->postCursilhoStep(3, $evento, [
            'data_casamento' => '31/12/1989',
            'cidade_casou' => 'Bauru',
            'igreja_casou' => 'Sao Paulo Apostolo',
        ])->assertSessionHasErrors('data_casamento');
    }

    public function test_cursilho_participa_igreja_nao_pula_passo_pastoral(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7109]);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Participante Igreja',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '390.533.447-05',
        ]);

        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload([
            'participa_igreja' => 'SIM',
        ]))->assertRedirect(route('cursilho.passo.5', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
    }

    public function test_cursilho_nao_participa_igreja_pula_passo_pastoral(): void
    {
        $evento = $this->createEventoCursilho(['numero' => 7110]);

        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, [
            'nome' => 'Participante Sem Pastoral',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
        ]);

        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload([
            'participa_igreja' => 'NAO',
        ]))->assertRedirect(route('cursilho.passo.6', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));

        $this->get(route('cursilho.passo.5', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect(route('cursilho.passo.6', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
    }

    public function test_cursilho_sem_email_nao_envia_email_participante(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho(['numero' => 7111]);
        $this->completeCursilhoFlow($evento, [
            'cpf' => '111.444.777-35',
            'email' => null,
        ], ['email' => '']);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        Mail::assertNotSent(CursilhoParticipanteMail::class);
        Mail::assertSent(CursilhoInscricaoInternaMail::class);
    }

    public function test_cursilho_falha_email_participante_nao_impede_finalizacao(): void
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

        $evento = $this->createEventoCursilho(['numero' => 7112]);
        $this->completeCursilhoFlow($evento, [
            'cpf' => '390.533.447-05',
        ], ['email' => 'falha@example.test']);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '39053344705',
        ]);
    }

    public function test_cursilho_falha_email_interno_nao_impede_finalizacao(): void
    {
        Mail::shouldReceive('to')->andReturnUsing(fn (string $to) => new class($to)
        {
            public function __construct(private string $to) {}

            public function send(object $mailable): void
            {
                if ($this->to === 'inscricoes@mccbauru.com.br') {
                    throw new RuntimeException('SMTP indisponível');
                }
            }
        });

        $evento = $this->createEventoCursilho(['numero' => 7113]);
        $this->completeCursilhoFlow($evento, [
            'cpf' => '111.444.777-35',
            'email' => 'interno-ok@example.test',
        ], ['email' => 'interno-ok@example.test']);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '11144477735',
        ]);
    }

    public function test_cursilho_bloqueia_cpf_criado_entre_passo_2_e_finalizacao(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho(['numero' => 7116]);
        $this->completeCursilhoFlow($evento, [
            'cpf' => '529.982.247-25',
        ]);

        $this->createInscricao($evento, [
            'nome' => 'Inscricao Concorrente',
            'cpf' => '529.982.247-25',
        ]);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect(route('cursilho.inscricaoconfirmada', ['publicoEvento' => 'homens']));

        $this->assertDatabaseCount('inscricoes_cursilho', 1);
        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'nome' => 'Inscricao Concorrente',
            'cpf_normalizado' => '52998224725',
        ]);
    }

    public function test_cursilho_trata_violacao_de_indice_unico_ao_finalizar(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho(['numero' => 7118]);
        $this->completeCursilhoFlow($evento, [
            'nome' => 'Candidato Race Cursilho',
            'cpf' => '390.533.447-05',
        ]);

        DB::unprepared(<<<'SQL'
            CREATE TRIGGER inscricoes_cursilho_race_cursilho
            BEFORE INSERT ON inscricoes_cursilho
            WHEN NEW.nome = 'CANDIDATO RACE CURSILHO'
            BEGIN
                SELECT RAISE(ABORT, 'UNIQUE constraint failed: inscricoes_cursilho.evento_id, inscricoes_cursilho.cpf_normalizado');
            END;
        SQL);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect(route('cursilho.inscricaoconfirmada', ['publicoEvento' => 'homens']));

        $this->assertDatabaseMissing('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '39053344705',
        ]);
    }

    public function test_cursilho_finalizado_persiste_pagamento_confirmado_false(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho(['numero' => 7117]);
        $this->completeCursilhoFlow($evento, [
            'cpf' => '111.444.777-35',
        ]);

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '11144477735',
            'pagamento_confirmado' => false,
        ]);
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function createEventoCursilho(array $overrides = []): Evento
    {
        return $this->createEvento(array_merge([
            'nome' => 'Cursilho Teste',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 7101,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
        ], $overrides));
    }

    private function startCursilho(Evento $evento): void
    {
        $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect();
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function postCursilhoStep(int $step, Evento $evento, array $payload): \Illuminate\Testing\TestResponse
    {
        return $this->post(route("cursilho.passo.$step.store", [
            'publicoEvento' => 'homens',
            'numero' => $evento->numero,
        ]), $payload);
    }

    /**
     * @param  array<string, mixed>  $step2Overrides
     */
    private function completeCursilhoFlow(Evento $evento, array $step2Overrides = [], array $step4Overrides = []): void
    {
        $this->startCursilho($evento);
        $this->postCursilhoStep(1, $evento, ['agree' => '1']);
        $this->postCursilhoStep(2, $evento, array_merge([
            'nome' => 'Candidato',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'email' => 'participante@example.test',
        ], $step2Overrides));
        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload($step4Overrides));
        $this->postCursilhoStep(6, $evento, $this->cursilhoStep6Payload());
    }

    /**
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function cursilhoStep4Payload(array $overrides = []): array
    {
        return array_merge([
            'nome_mae' => 'Mae Teste',
            'numero_filhos' => 0,
            'profissao' => 'Analista',
            'telefone' => '14999999999',
            'email' => 'participante@example.test',
            'grau_instrucao' => 'SUPERIOR_COMPLETO',
            'cep' => '17000000',
            'endereco' => 'Rua Teste',
            'bairro' => 'Centro',
            'cidade' => 'Bauru',
            'estado' => 'SP',
            'sacramentos' => ['BATIZADO', 'EUCARISTIA'],
            'participa_igreja' => 'NAO',
        ], $overrides);
    }

    /**
     * @return array<string, mixed>
     */
    private function cursilhoStep6Payload(): array
    {
        return [
            'contato_familia_missa' => 'Contato da familia',
            'alimentacao_especial' => 'Nenhuma',
            'padrinho_madrinha_contato' => 'Padrinho Teste',
        ];
    }
}
