<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use App\Services\Support\HtmlSanitizerService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class HtmlSanitizerTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_remove_script(): void
    {
        $html = app(HtmlSanitizerService::class)->sanitize('<p>Seguro</p><script>alert(1)</script>');

        $this->assertStringContainsString('<p>Seguro</p>', (string) $html);
        $this->assertStringNotContainsString('<script', (string) $html);
        $this->assertStringNotContainsString('alert(1)', (string) $html);
    }

    public function test_remove_javascript_em_links(): void
    {
        $html = app(HtmlSanitizerService::class)->sanitize('<a href="javascript:alert(1)" target="_blank">Clique</a>');

        $this->assertStringContainsString('<a', (string) $html);
        $this->assertStringContainsString('Clique', (string) $html);
        $this->assertStringNotContainsString('javascript:', (string) $html);
    }

    public function test_remove_onerror(): void
    {
        $html = app(HtmlSanitizerService::class)->sanitize('<p onerror="alert(1)">Seguro</p><img src=x onerror="alert(2)">');

        $this->assertStringContainsString('<p>Seguro</p>', (string) $html);
        $this->assertStringNotContainsString('onerror', (string) $html);
        $this->assertStringNotContainsString('alert', (string) $html);
    }

    public function test_mantem_tags_permitidas(): void
    {
        $html = app(HtmlSanitizerService::class)->sanitize('<p><strong>Importante</strong></p><ul><li>Item</li></ul>');

        $this->assertStringContainsString('<strong>Importante</strong>', (string) $html);
        $this->assertStringContainsString('<ul><li>Item</li></ul>', (string) $html);
    }

    public function test_lida_com_null_e_string_vazia(): void
    {
        $service = app(HtmlSanitizerService::class);

        $this->assertNull($service->sanitize(null));
        $this->assertNull($service->sanitize('   '));
    }

    public function test_nao_persiste_conteudo_perigoso_em_eventos(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'orientacoes_participante' => '<p>Leia</p><script>alert(1)</script><a href="javascript:alert(1)">link</a>',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $evento = Evento::query()->where('numero', 9301)->firstOrFail();

        $this->assertStringContainsString('<p>Leia</p>', (string) $evento->orientacoes_participante);
        $this->assertStringNotContainsString('<script', (string) $evento->orientacoes_participante);
        $this->assertStringNotContainsString('javascript:', (string) $evento->orientacoes_participante);
    }

    public function test_todos_campos_html_do_evento_removem_script_e_javascript_mantendo_tags_seguras(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $payload = $this->eventoPayloadAdmin(['numero' => 9302]);

        foreach ($this->htmlFields() as $field) {
            $payload[$field] = '<p><strong>Seguro</strong></p><ul><li>Item</li></ul><script>alert(1)</script><a href="javascript:alert(1)">Link</a>';
        }

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $payload)
            ->assertRedirect(route('secretaria.eventos.index'));

        $evento = Evento::query()->where('numero', 9302)->firstOrFail();

        foreach ($this->htmlFields() as $field) {
            $html = (string) $evento->{$field};

            $this->assertStringContainsString('<strong>Seguro</strong>', $html);
            $this->assertStringContainsString('<ul><li>Item</li></ul>', $html);
            $this->assertStringNotContainsString('<script', $html);
            $this->assertStringNotContainsString('alert(1)', $html);
            $this->assertStringNotContainsString('javascript:', $html);
        }
    }

    public function test_todos_campos_html_do_evento_aceitam_null_e_string_vazia(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $payload = $this->eventoPayloadAdmin([
            'numero' => 9303,
            'orientacoes_participante' => null,
            'encerramento_info' => '',
            'informacoes_finais' => '   ',
            'observacoes_internas' => null,
        ]);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $payload)
            ->assertRedirect(route('secretaria.eventos.index'));

        $evento = Evento::query()->where('numero', 9303)->firstOrFail();

        foreach ($this->htmlFields() as $field) {
            $this->assertNull($evento->{$field});
        }
    }

    public function test_view_publica_nao_renderiza_script_executavel(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin([
                'numero' => 9304,
                'informacoes_finais' => '<p><strong>Seguro</strong></p><script>alert(1)</script><a href="javascript:alert(1)">link</a>',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        $evento = Evento::query()->where('numero', 9304)->firstOrFail();

        $html = view('fichas.cursilho.finalizado', [
            'evento' => $evento,
            'publicoEvento' => 'homens',
            'sexo' => 'homens',
            'sexoLabel' => 'Homens',
            'numero' => $evento->numero,
        ])->render();

        $this->assertStringContainsString('<strong>Seguro</strong>', $html);
        $this->assertStringNotContainsString('<script', $html);
        $this->assertStringNotContainsString('javascript:', $html);
    }

    /**
     * @return array<int, string>
     */
    private function htmlFields(): array
    {
        return [
            'orientacoes_participante',
            'encerramento_info',
            'informacoes_finais',
            'observacoes_internas',
        ];
    }

    /**
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function eventoPayloadAdmin(array $overrides = []): array
    {
        return array_merge([
            'nome' => 'Evento HTML',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 9301,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth()->format('Y-m-d H:i:s'),
            'termino_em' => now()->addMonth()->addDays(3)->format('Y-m-d H:i:s'),
        ], $overrides);
    }
}
