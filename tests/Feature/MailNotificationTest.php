<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\Fichas\AssembleiaInscricaoInterna;
use App\Mail\Fichas\AssembleiaParticipanteMail;
use App\Mail\Fichas\CursilhoInscricaoInternaMail;
use App\Mail\Fichas\CursilhoParticipanteMail;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class MailNotificationTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_cursilho_envia_email_ao_participante_e_interno(): void
    {
        Mail::fake();

        $evento = $this->createEventoCursilho();
        $this->completeCursilhoFlow($evento, '529.982.247-25', 'participante@example.test');

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        Mail::assertSent(CursilhoParticipanteMail::class);
        Mail::assertSent(CursilhoInscricaoInternaMail::class);
    }

    public function test_assembleia_envia_email_ao_participante_e_interno(): void
    {
        Mail::fake();

        $evento = $this->createEventoAssembleia();
        $this->completeAssembleiaFlow($evento, '111.444.777-35', 'assembleia@example.test');

        $this->post(route('assembleia.finalizar', $evento->numero))
            ->assertRedirect(route('assembleia.finalizado', $evento->numero));

        Mail::assertSent(AssembleiaParticipanteMail::class);
        Mail::assertSent(AssembleiaInscricaoInterna::class);
    }

    public function test_falha_de_envio_nao_impede_finalizacao(): void
    {
        Mail::shouldReceive('to')->andThrow(new RuntimeException('SMTP indisponível'));

        $evento = $this->createEventoCursilho(['numero' => 8503]);
        $this->completeCursilhoFlow($evento, '390.533.447-05', 'falha@example.test');

        $this->post(route('cursilho.finalizar', ['publicoEvento' => 'homens', 'numero' => $evento->numero]))
            ->assertOk();

        $this->assertDatabaseHas('inscricoes_cursilho', [
            'evento_id' => $evento->id,
            'cpf_normalizado' => '39053344705',
        ]);
    }

    public function test_templates_carregam_dados_minimos(): void
    {
        $cursilhoData = $this->mailData([
            'numero' => 85,
            'sexoLabel' => 'Homens',
            'inscricao' => [
                'nome' => 'JOAO TESTE',
                'cpf' => '529.982.247-25',
                'numero_evento' => 85,
                'contato_familia_missa' => 'Contato Familia',
            ],
        ]);

        $assembleiaData = $this->mailData([
            'numero' => 2026,
            'sexoLabel' => 'Assembleia',
            'inscricao' => [
                'nome' => 'MARIA TESTE',
                'cpf' => '111.444.777-35',
                'numero_evento' => 2026,
                'email' => 'maria@example.test',
                'paroquia' => 'PAROQUIA TESTE',
                'finalizada_em_br' => '01/01/2026 10:00:00',
            ],
        ]);

        $this->assertStringContainsString('85º Cursilho', (new CursilhoParticipanteMail($cursilhoData))->render());
        $this->assertStringContainsString('JOAO TESTE', (new CursilhoInscricaoInternaMail($cursilhoData))->render());
        $this->assertStringContainsString('Contato Familia', (new CursilhoInscricaoInternaMail($cursilhoData))->render());
        $this->assertStringContainsString('Assembleia Diocesana 2026', (new AssembleiaParticipanteMail($assembleiaData))->render());
        $this->assertStringContainsString('MARIA TESTE', (new AssembleiaInscricaoInterna($assembleiaData))->render());
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function createEventoCursilho(array $overrides = []): Evento
    {
        return $this->createEvento(array_merge([
            'nome' => 'Cursilho Mail',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 8501,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
        ], $overrides));
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function createEventoAssembleia(array $overrides = []): Evento
    {
        return $this->createEvento(array_merge([
            'nome' => 'Assembleia Mail',
            'tipo_evento' => Evento::TIPO_EVENTO_ASSEMBLEIA,
            'publico_evento' => 'ASSEMBLEIA',
            'numero' => 8502,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
        ], $overrides));
    }

    private function completeCursilhoFlow(Evento $evento, string $cpf, string $email): void
    {
        $this->get(route('cursilho.start', ['publicoEvento' => 'homens', 'numero' => $evento->numero]));
        $this->post(route('cursilho.passo.1.store', ['publicoEvento' => 'homens', 'numero' => $evento->numero]), ['agree' => '1']);
        $this->post(route('cursilho.passo.2.store', ['publicoEvento' => 'homens', 'numero' => $evento->numero]), [
            'nome' => 'Joao Teste',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => $cpf,
            'email' => $email,
        ]);
        $this->post(route('cursilho.passo.4.store', ['publicoEvento' => 'homens', 'numero' => $evento->numero]), [
            'nome_mae' => 'Mae Teste',
            'numero_filhos' => 0,
            'profissao' => 'Analista',
            'telefone' => '14999999999',
            'email' => $email,
            'grau_instrucao' => 'SUPERIOR_COMPLETO',
            'cep' => '17000000',
            'endereco' => 'Rua Teste',
            'bairro' => 'Centro',
            'cidade' => 'Bauru',
            'estado' => 'SP',
            'participa_igreja' => 'NAO',
        ]);
        $this->post(route('cursilho.passo.6.store', ['publicoEvento' => 'homens', 'numero' => $evento->numero]), [
            'contato_familia_missa' => 'Contato Familia',
            'alimentacao_especial' => 'Nenhuma',
            'padrinho_madrinha_contato' => 'Padrinho Teste',
        ]);
    }

    private function completeAssembleiaFlow(Evento $evento, string $cpf, string $email): void
    {
        $this->get(route('assembleia.show', $evento->numero));
        $this->post(route('assembleia.passo.1.store', $evento->numero), ['agree' => '1']);
        $this->post(route('assembleia.passo.2.store', $evento->numero), [
            'nome' => 'Maria Teste',
            'data_nascimento' => '01/01/1990',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => $cpf,
            'email' => $email,
            'cep' => '17000-000',
            'endereco' => 'Rua Assembleia',
            'bairro' => 'Centro',
            'cidade' => 'Bauru',
            'estado' => 'SP',
            'paroquia' => 'Paroquia Teste',
        ]);
    }

    /**
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function mailData(array $overrides = []): array
    {
        return array_replace_recursive([
            'publicoEvento' => 'homens',
            'sexo' => 'homens',
            'sexoLabel' => 'Homens',
            'numero' => 1,
            'inscricao' => [
                'nome' => 'TESTE',
                'cpf' => '000.000.000-00',
                'numero_evento' => 1,
            ],
            'bannerPath' => null,
            'eventoImagePath' => null,
            'pixPath' => null,
        ], $overrides);
    }
}
