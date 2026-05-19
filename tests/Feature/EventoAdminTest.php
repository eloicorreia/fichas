<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class EventoAdminTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_evento_view_acessa_index(): void
    {
        $user = $this->userWithPermissions(['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertOk();
    }

    public function test_evento_create_acessa_create_e_store(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.create'))
            ->assertOk();

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin())
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', ['numero' => 9401]);
    }

    public function test_evento_update_acessa_edit_e_update(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9402]);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.edit', $evento))
            ->assertOk();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9402,
                'nome' => 'Evento Atualizado',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', ['id' => $evento->id, 'nome' => 'Evento Atualizado']);
    }

    public function test_evento_delete_acessa_destroy(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento(['numero' => 9403]);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseMissing('eventos', ['id' => $evento->id]);
    }

    public function test_evento_view_nao_cria_edita_ou_exclui(): void
    {
        $user = $this->userWithPermissions(['evento.view']);
        $evento = $this->createEvento(['numero' => 9404]);

        $this->actingAs($user)->get(route('secretaria.eventos.create'))->assertForbidden();
        $this->actingAs($user)->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin(['numero' => 9405]))->assertForbidden();
        $this->actingAs($user)->get(route('secretaria.eventos.edit', $evento))->assertForbidden();
        $this->actingAs($user)->delete(route('secretaria.eventos.destroy', $evento))->assertForbidden();
    }

    public function test_nao_exclui_evento_com_inscricoes(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento(['numero' => 9406]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'))
            ->assertSessionHas('status', 'O evento não pode ser excluído porque possui inscrições vinculadas.');

        $this->assertDatabaseHas('eventos', ['id' => $evento->id]);
    }

    public function test_valida_datas_inicio_e_termino(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'inicio_em' => now()->addDays(5)->format('Y-m-d H:i:s'),
                'termino_em' => now()->addDays(4)->format('Y-m-d H:i:s'),
            ]))
            ->assertSessionHasErrors('termino_em');
    }

    public function test_valida_nome_obrigatorio_numero_unico_e_ativo_boolean(): void
    {
        $user = $this->userWithPermissions(['evento.create']);
        $this->createEvento(['numero' => 9413]);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'nome' => '',
                'numero' => 9413,
                'ativo' => 'talvez',
            ]))
            ->assertSessionHasErrors(['nome', 'numero', 'ativo']);
    }

    public function test_valida_tipo_publico_e_status(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'tipo_evento' => 'INVALIDO',
                'publico_evento' => 'INVALIDO',
                'status' => 'INVALIDO',
            ]))
            ->assertSessionHasErrors(['tipo_evento', 'publico_evento', 'status']);
    }

    public function test_campos_html_sao_sanitizados(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'numero' => 9407,
                'informacoes_finais' => '<p>OK</p><script>alert(1)</script>',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $evento = Evento::query()->where('numero', 9407)->firstOrFail();

        $this->assertSame('<p>OK</p>', $evento->informacoes_finais);
    }

    public function test_campos_html_removem_onerror_javascript_e_mantem_tags_seguras(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'numero' => 9414,
                'informacoes_finais' => '<p onerror="alert(1)"><strong>OK</strong></p><a href="javascript:alert(1)">link</a><ul><li>Item</li></ul>',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $html = (string) Evento::query()->where('numero', 9414)->firstOrFail()->informacoes_finais;

        $this->assertStringContainsString('<strong>OK</strong>', $html);
        $this->assertStringContainsString('<ul><li>Item</li></ul>', $html);
        $this->assertStringNotContainsString('onerror', $html);
        $this->assertStringNotContainsString('javascript:', $html);
    }

    public function test_pode_alterar_nome_e_status_com_inscricoes(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9408, 'status' => Evento::STATUS_ABERTO]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9408,
                'nome' => 'Evento Renomeado',
                'status' => Evento::STATUS_FECHADO,
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', [
            'id' => $evento->id,
            'nome' => 'Evento Renomeado',
            'status' => Evento::STATUS_FECHADO,
        ]);
    }

    public function test_nao_altera_tipo_evento_com_inscricoes(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9409]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9409,
                'tipo_evento' => Evento::TIPO_EVENTO_ENCONTRO,
            ]))
            ->assertSessionHasErrors('tipo_evento');

        $this->assertSame(Evento::TIPO_EVENTO_CURSILHO, $evento->fresh()->tipo_evento);
    }

    public function test_nao_altera_publico_evento_com_inscricoes(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9410]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9410,
                'publico_evento' => Evento::PUBLICO_MULHERES,
            ]))
            ->assertSessionHasErrors('publico_evento');

        $this->assertSame(Evento::PUBLICO_HOMENS, $evento->fresh()->publico_evento);
    }

    public function test_nao_altera_numero_evento_com_inscricoes_se_afetar_url_publica(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9411]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9412,
            ]))
            ->assertSessionHasErrors('numero');

        $this->assertSame(9411, $evento->fresh()->numero);
    }

    /**
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function eventoPayloadAdmin(array $overrides = []): array
    {
        return array_merge([
            'nome' => 'Evento Admin',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 9401,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth()->format('Y-m-d H:i:s'),
            'termino_em' => now()->addMonth()->addDays(3)->format('Y-m-d H:i:s'),
        ], $overrides);
    }
}
