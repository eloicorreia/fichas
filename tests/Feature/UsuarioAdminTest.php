<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class UsuarioAdminTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_usuario_view_lista_usuarios(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view']);

        $this->actingAs($user)
            ->get(route('secretaria.users.index'))
            ->assertOk();
    }

    public function test_usuario_manage_cria_usuario(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $role = Role::query()->create(['name' => 'consulta', 'label' => 'Consulta', 'active' => true]);

        $this->actingAs($user)
            ->post(route('secretaria.users.store'), $this->userPayload([
                'roles' => [$role->id],
            ]))
            ->assertRedirect(route('secretaria.users.index'));

        $created = User::query()->where('email', 'novo@example.test')->firstOrFail();

        $this->assertTrue($created->roles()->whereKey($role->id)->exists());
    }

    public function test_usuario_manage_atualiza_usuario(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $target = User::factory()->create(['email' => 'alvo@example.test']);

        $this->actingAs($user)
            ->put(route('secretaria.users.update', $target), [
                'name' => 'Alvo Atualizado',
                'email' => 'alvo-atualizado@example.test',
                'password' => '',
                'password_confirmation' => '',
                'roles' => [],
            ])
            ->assertRedirect(route('secretaria.users.index'));

        $this->assertDatabaseHas('users', [
            'id' => $target->id,
            'name' => 'Alvo Atualizado',
            'email' => 'alvo-atualizado@example.test',
        ]);
    }

    public function test_usuario_sem_manage_nao_cria_ou_edita(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view']);
        $target = User::factory()->create();

        $this->actingAs($user)->get(route('secretaria.users.create'))->assertForbidden();
        $this->actingAs($user)->post(route('secretaria.users.store'), $this->userPayload())->assertForbidden();
        $this->actingAs($user)->get(route('secretaria.users.edit', $target))->assertForbidden();
    }

    public function test_valida_email_unico(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        User::factory()->create(['email' => 'duplicado@example.test']);

        $this->actingAs($user)
            ->post(route('secretaria.users.store'), $this->userPayload([
                'email' => 'duplicado@example.test',
            ]))
            ->assertSessionHasErrors('email');
    }

    public function test_valida_senha_minima_e_confirmada(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);

        $this->actingAs($user)
            ->post(route('secretaria.users.store'), $this->userPayload([
                'password' => 'curta',
                'password_confirmation' => 'diferente',
            ]))
            ->assertSessionHasErrors('password');
    }

    public function test_vinculo_de_roles_funciona(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $target = User::factory()->create();
        $role = Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);

        $this->actingAs($user)
            ->put(route('secretaria.users.roles.update', $target), [
                'roles' => [$role->id],
            ])
            ->assertRedirect(route('secretaria.users.index'));

        $this->assertTrue($target->fresh()->roles()->whereKey($role->id)->exists());
    }

    public function test_nao_remove_role_super_admin_do_ultimo_admin(): void
    {
        $user = $this->superAdminWithPermissions(['usuario.view', 'usuario.manage']);
        $secretaria = Role::query()->create(['name' => 'secretaria-extra', 'label' => 'Secretaria Extra', 'active' => true]);

        $this->actingAs($user)
            ->put(route('secretaria.users.roles.update', $user), [
                'roles' => [$secretaria->id],
            ])
            ->assertRedirect(route('secretaria.users.index'))
            ->assertSessionHas('status', 'Não é possível remover o último super administrador.');

        $this->assertTrue($user->fresh()->roles()->where('roles.name', 'super-admin')->exists());
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
    private function userPayload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Novo Usuario',
            'email' => 'novo@example.test',
            'password' => 'Senha123',
            'password_confirmation' => 'Senha123',
            'roles' => [],
        ], $overrides);
    }
}
