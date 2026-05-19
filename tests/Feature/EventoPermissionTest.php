<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class EventoPermissionTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_evento_view_nao_acessa_create_edit_update_delete(): void
    {
        $user = $this->userWithPermissions(['evento.view']);
        $evento = $this->createEvento();

        $this->actingAs($user)->get(route('secretaria.eventos.create'))->assertForbidden();
        $this->actingAs($user)->get(route('secretaria.eventos.edit', $evento))->assertForbidden();
        $this->actingAs($user)->put(route('secretaria.eventos.update', $evento), $this->eventoPayload())->assertForbidden();
        $this->actingAs($user)->delete(route('secretaria.eventos.destroy', $evento))->assertForbidden();
    }

    public function test_evento_create_cria(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayload(['numero' => 888]))
            ->assertRedirect(route('secretaria.eventos.index'));
    }

    public function test_evento_update_edita(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayload(['nome' => 'Evento Editado']))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseHas('eventos', ['id' => $evento->id, 'nome' => 'Evento Editado']);
    }

    public function test_evento_delete_exclui(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento();

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'));

        $this->assertDatabaseMissing('eventos', ['id' => $evento->id]);
    }
}
