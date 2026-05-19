<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Services\Secretaria\InscricaoCursilhoQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class InscricaoSearchTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_busca_cpf_com_mascara_e_sem_mascara(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['nome' => 'CPF Buscavel', 'cpf' => '529.982.247-25']);

        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '529.982.247-25']))->assertSee('CPF Buscavel');
        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '52998224725']))->assertSee('CPF Buscavel');
    }

    public function test_cpf_com_onze_digitos_usa_igualdade_normalizada(): void
    {
        $query = app(InscricaoCursilhoQueryService::class)->build([
            'q' => '52998224725',
            'eventoId' => '',
            'status' => '',
            'pagamento' => '',
            'sort' => 'nome',
            'dir' => 'asc',
        ]);

        $this->assertStringContainsString('"cpf_normalizado" = ?', $query->toSql());
    }

    public function test_busca_telefone_com_mascara_e_so_digitos(): void
    {
        $user = $this->userWithPermissions(['inscricao.view']);
        $evento = $this->createEvento();
        $this->createInscricao($evento, ['nome' => 'Telefone Buscavel', 'telefone' => '(11) 98888-7777']);

        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '(11) 98888-7777']))->assertSee('Telefone Buscavel');
        $this->actingAs($user)->get(route('secretaria.inscricoes.index', ['q' => '11988887777']))->assertSee('Telefone Buscavel');
    }
}
