<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class InscricaoCpfValidationTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
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

    public function test_banco_bloqueia_cpf_normalizado_duplicado_no_mesmo_evento(): void
    {
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['cpf' => '529.982.247-25']);

        $this->expectException(\Illuminate\Database\QueryException::class);

        \App\Models\InscricaoCursilho::query()->create($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'cpf' => '52998224725',
        ]));
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

    public function test_campos_de_pagamento_sao_mass_assignable(): void
    {
        $evento = $this->createEvento();

        $inscricao = \App\Models\InscricaoCursilho::query()->create($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'pagamento_confirmado' => true,
            'pagamento_data' => now()->toDateString(),
            'pagamento_comprovante_base64' => 'sensivel',
        ]));

        $this->assertTrue($inscricao->fresh()->pagamento_confirmado);
        $this->assertSame(now()->toDateString(), $inscricao->fresh()->pagamento_data?->format('Y-m-d'));
        $this->assertSame('sensivel', $inscricao->fresh()->pagamento_comprovante_base64);
    }

    public function test_usuario_com_inscricao_update_nao_altera_pagamento_pelo_update_geral(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.update']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.update', [$evento, $inscricao]), $this->inscricaoPayload([
                'pagamento_confirmado' => true,
                'pagamento_data' => now()->format('Y-m-d'),
            ]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
        $this->assertNull($inscricao->fresh()->pagamento_data);
    }

    public function test_usuario_com_inscricao_payment_altera_pagamento_pela_rota_propria(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);
        $pagamentoData = now()->toDateString();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
                'pagamento_data' => $pagamentoData,
                'pagamento_comprovante_base64' => 'data:application/pdf;base64,comprovante',
            ])
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        $this->assertTrue($inscricao->fresh()->pagamento_confirmado);
        $this->assertSame($pagamentoData, $inscricao->fresh()->pagamento_data?->format('Y-m-d'));
        $this->assertSame('data:application/pdf;base64,comprovante', $inscricao->fresh()->pagamento_comprovante_base64);
    }

    public function test_pagamento_confirmado_exige_data(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
            ])
            ->assertSessionHasErrors('pagamento_data');

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
    }

    public function test_mensagem_pagamento_confirmado_exige_data_eh_amigavel(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
            ])
            ->assertSessionHasErrors([
                'pagamento_data' => 'Informe a data do pagamento quando o pagamento estiver confirmado.',
            ]);
    }

    public function test_pagamento_pendente_limpa_data(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, [
            'pagamento_confirmado' => true,
            'pagamento_data' => now()->subDay()->toDateString(),
        ]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => false,
                'pagamento_data' => now()->toDateString(),
            ])
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
        $this->assertNull($inscricao->fresh()->pagamento_data);
    }

    public function test_pagamento_data_futura_falha(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
                'pagamento_data' => now()->addDay()->toDateString(),
            ])
            ->assertSessionHasErrors('pagamento_data');

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
    }

    public function test_mensagem_pagamento_data_futura_eh_amigavel(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.payment']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
                'pagamento_data' => now()->addDay()->toDateString(),
            ])
            ->assertSessionHasErrors([
                'pagamento_data' => 'A data do pagamento não pode ser futura.',
            ]);
    }

    public function test_usuario_sem_inscricao_payment_nao_altera_pagamento(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $inscricao = $this->createInscricao($evento, ['pagamento_confirmado' => false]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.pagamento.update', [$evento, $inscricao]), [
                'pagamento_confirmado' => true,
            ])
            ->assertForbidden();

        $this->assertFalse($inscricao->fresh()->pagamento_confirmado);
    }
}
