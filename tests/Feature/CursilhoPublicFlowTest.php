<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\Fichas\CursilhoInscricaoInternaMail;
use App\Mail\Fichas\CursilhoParticipanteMail;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
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
            ->assertRedirect('http://localhost/cursilho/homens/'.$evento->numero.'/passo/1');

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertRedirect('http://localhost/cursilho/homens/'.$evento->numero.'/passo/1');
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
    private function completeCursilhoFlow(Evento $evento, array $step2Overrides = []): void
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
        $this->postCursilhoStep(4, $evento, $this->cursilhoStep4Payload());
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
