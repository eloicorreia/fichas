<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Evento;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Mockery;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class AuditLogTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
        Log::spy();
    }

    public function test_criar_evento_registra_log(): void
    {
        $user = $this->userWithPermissions(['evento.create']);

        $this->actingAs($user)
            ->post(route('secretaria.eventos.store'), $this->eventoPayloadAdmin(['numero' => 9501]))
            ->assertRedirect(route('secretaria.eventos.index'));

        Log::shouldHaveReceived('info')
            ->with('Evento criado com sucesso.', Mockery::on(fn (array $context): bool => isset($context['evento_id'])));
    }

    public function test_atualizar_evento_registra_log(): void
    {
        $user = $this->userWithPermissions(['evento.update']);
        $evento = $this->createEvento(['numero' => 9502]);

        $this->actingAs($user)
            ->put(route('secretaria.eventos.update', $evento), $this->eventoPayloadAdmin([
                'numero' => 9502,
                'nome' => 'Evento Log Atualizado',
            ]))
            ->assertRedirect(route('secretaria.eventos.index'));

        Log::shouldHaveReceived('info')
            ->with('Evento atualizado com sucesso.', Mockery::on(fn (array $context): bool => $context['evento_id'] === $evento->id));
    }

    public function test_excluir_evento_registra_log(): void
    {
        $user = $this->userWithPermissions(['evento.delete']);
        $evento = $this->createEvento(['numero' => 9503]);

        $this->actingAs($user)
            ->delete(route('secretaria.eventos.destroy', $evento))
            ->assertRedirect(route('secretaria.eventos.index'));

        Log::shouldHaveReceived('info')
            ->with('Evento excluído com sucesso.', Mockery::on(fn (array $context): bool => $context['evento_id'] === $evento->id));
    }

    public function test_criar_usuario_registra_log(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $role = Role::query()->create(['name' => 'audit-secretaria', 'label' => 'Audit Secretaria', 'active' => true]);

        $this->actingAs($user)
            ->post(route('secretaria.users.store'), $this->userPayload([
                'roles' => [$role->id],
            ]))
            ->assertRedirect(route('secretaria.users.index'));

        Log::shouldHaveReceived('info')
            ->with('Usuário criado com sucesso.', Mockery::on(fn (array $context): bool => $context['email'] === 'audit-user@example.test'));
    }

    public function test_atualizar_usuario_registra_log(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $target = User::factory()->create(['email' => 'audit-target@example.test']);
        $role = Role::query()->create(['name' => 'audit-update', 'label' => 'Audit Update', 'active' => true]);

        $this->actingAs($user)
            ->put(route('secretaria.users.update', $target), [
                'name' => 'Audit Target',
                'email' => 'audit-target-updated@example.test',
                'password' => '',
                'password_confirmation' => '',
                'roles' => [$role->id],
            ])
            ->assertRedirect(route('secretaria.users.index'));

        Log::shouldHaveReceived('info')
            ->with('Usuário atualizado com sucesso.', Mockery::on(fn (array $context): bool => $context['user_id'] === $target->id));
    }

    public function test_atualizar_role_permissions_registra_log(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);
        $role = Role::query()->create(['name' => 'auditoria', 'label' => 'Auditoria', 'active' => true]);
        $permission = Permission::query()->create(['name' => 'audit.permission', 'label' => 'Audit', 'module' => 'audit', 'active' => true]);

        $this->actingAs($user)
            ->put(route('secretaria.roles.permissions.update', $role), [
                'permissions' => [$permission->id],
            ])
            ->assertRedirect(route('secretaria.roles.index'));

        Log::shouldHaveReceived('info')
            ->with('Permissões do papel atualizadas com sucesso.', Mockery::on(fn (array $context): bool => $context['role_id'] === $role->id));
    }

    public function test_restaurar_inscricao_registra_log(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.restore']);
        $evento = $this->createEvento(['numero' => 9504]);
        $inscricao = $this->createInscricao($evento);
        $inscricao->delete();

        $this->actingAs($user)
            ->put(route('secretaria.eventos.inscricoes.restore', [$evento, $inscricao]))
            ->assertRedirect(route('secretaria.eventos.inscricoes.index', $evento));

        Log::shouldHaveReceived('info')
            ->with('Inscrição restaurada com sucesso.', Mockery::on(fn (array $context): bool => $context['inscricao_id'] === $inscricao->id));
    }

    public function test_exportar_inscricao_registra_log(): void
    {
        $user = $this->userWithPermissions(['inscricao.view', 'inscricao.export']);
        $evento = $this->createEvento(['numero' => 9505]);
        $this->createInscricao($evento);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.inscricoes.export', $evento))
            ->assertOk();

        Log::shouldHaveReceived('info')
            ->with('Exportação de inscrições por evento solicitada.', Mockery::on(fn (array $context): bool => $context['evento_id'] === $evento->id));
    }

    /**
     * @param  array<int, string>  $permissions
     */
    private function superAdminWithPermissions(array $permissions): User
    {
        $user = User::factory()->create();
        $role = Role::query()->create(['name' => 'super-admin', 'label' => 'Super Admin', 'active' => true]);

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
     * @param  array<string, mixed>  $overrides
     * @return array<string, mixed>
     */
    private function eventoPayloadAdmin(array $overrides = []): array
    {
        return array_merge([
            'nome' => 'Evento Audit',
            'tipo_evento' => Evento::TIPO_EVENTO_CURSILHO,
            'publico_evento' => Evento::PUBLICO_HOMENS,
            'numero' => 9501,
            'status' => Evento::STATUS_ABERTO,
            'ativo' => true,
            'inicio_em' => now()->addMonth()->format('Y-m-d H:i:s'),
            'termino_em' => now()->addMonth()->addDays(3)->format('Y-m-d H:i:s'),
        ], $overrides);
    }

    /**
     * @return array<string, mixed>
     */
    private function userPayload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Audit User',
            'email' => 'audit-user@example.test',
            'password' => 'Senha123',
            'password_confirmation' => 'Senha123',
            'roles' => [],
        ], $overrides);
    }
}
