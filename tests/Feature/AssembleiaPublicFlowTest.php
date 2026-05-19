<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\Fichas\AssembleiaInscricaoInterna;
use App\Mail\Fichas\AssembleiaParticipanteMail;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
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

    private function completeAssembleiaFlow(Evento $evento): void
    {
        $this->startAssembleia($evento);
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1'])
            ->assertRedirect(route('assembleia.passo.2', $evento->numero));
        $this->post(route('assembleia.passo.2.store', $evento->numero), $this->assembleiaStep2Payload())
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
