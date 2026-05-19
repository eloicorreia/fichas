<?php

declare(strict_types=1);

namespace Tests\Feature\Concerns;

use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;

trait CreatesSecretariaData
{
    protected function setUpSecretariaData(): void
    {
        config(['app.url' => 'http://localhost']);
        URL::forceRootUrl('http://localhost');
        $this->withoutVite();
    }

    /**
     * @param  array<int, string>  $permissions
     */
    private function userWithPermissions(array $permissions): User
    {
        $user = User::factory()->create();

        $role = Role::query()->firstOrCreate(
            ['name' => 'secretaria'],
            ['label' => 'Secretaria', 'active' => true]
        );

        $permissionIds = collect($permissions)
            ->map(fn (string $permission): int => Permission::query()->updateOrCreate(
                ['name' => $permission],
                ['label' => $permission, 'module' => explode('.', $permission)[0], 'active' => true]
            )->id)
            ->all();

        $role->permissions()->sync($permissionIds);
        $user->roles()->sync([$role->id]);

        return $user;
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function createEvento(array $attributes = []): Evento
    {
        return Evento::query()->create(array_merge($this->eventoPayload(), $attributes));
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function eventoPayload(array $attributes = []): array
    {
        return array_merge([
            'nome' => 'Cursilho',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => random_int(1000, 9999),
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth()->format('Y-m-d H:i:s'),
            'termino_em' => now()->addMonth()->addDays(3)->format('Y-m-d H:i:s'),
        ], $attributes);
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function createInscricao(Evento $evento, array $attributes = []): InscricaoCursilho
    {
        $payload = array_merge($this->rawInscricaoPayload([
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'cpf' => (string) random_int(10000000000, 99999999999),
        ]), $attributes);

        $inscricao = InscricaoCursilho::query()->create(Arr::except($payload, [
            'pagamento_confirmado',
            'pagamento_data',
            'pagamento_comprovante_base64',
        ]));

        $protectedAttributes = Arr::only($payload, [
            'pagamento_confirmado',
            'pagamento_data',
            'pagamento_comprovante_base64',
        ]);

        if ($protectedAttributes !== []) {
            $inscricao->forceFill($protectedAttributes)->save();
        }

        return $inscricao;
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function inscricaoPayload(array $attributes = []): array
    {
        return array_merge($this->rawInscricaoPayload(), $attributes);
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    private function rawInscricaoPayload(array $attributes = []): array
    {
        return array_merge([
            'evento_id' => 1,
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero_evento' => 1,
            'status_ficha' => InscricaoCursilho::STATUS_CANDIDATO,
            'aceitou_termo' => true,
            'finalizada_em' => null,
            'nome' => 'Pessoa Teste '.random_int(1000, 9999),
            'data_nascimento' => '1990-01-01',
            'estado_civil' => 'SOLTEIRO',
            'cpf' => '529.982.247-25',
            'nome_mae' => 'Mae Teste',
            'telefone' => '11999999999',
            'cep' => '01000-000',
            'endereco' => 'Rua Teste',
            'bairro' => 'Centro',
            'cidade' => 'Sao Paulo',
            'estado' => 'SP',
            'participa_igreja' => 'SIM',
            'contato_familia_missa' => 'Contato',
            'alimentacao_especial' => 'Nenhuma',
            'padrinho_madrinha_contato' => 'Padrinho',
            'pagamento_confirmado' => false,
        ], $attributes);
    }
}
