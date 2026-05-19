<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class RolePermissionAdminTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_somente_super_admin_acessa_roles_e_permissoes(): void
    {
        $secretaria = $this->userWithPermissions(['role.view', 'permission.view']);
        $superAdmin = $this->superAdminWithPermissions(['role.view', 'permission.view']);

        $this->actingAs($secretaria)->get(route('secretaria.roles.index'))->assertForbidden();
        $this->actingAs($secretaria)->get(route('secretaria.permissions.index'))->assertForbidden();

        $this->actingAs($superAdmin)->get(route('secretaria.roles.index'))->assertOk();
        $this->actingAs($superAdmin)->get(route('secretaria.permissions.index'))->assertOk();
    }

    public function test_role_manage_cria_edita_e_exclui_papel(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);

        $this->actingAs($user)
            ->post(route('secretaria.roles.store'), [
                'name' => 'custom-role',
                'label' => 'Custom Role',
                'active' => true,
            ])
            ->assertRedirect(route('secretaria.roles.index'));

        $role = Role::query()->where('name', 'custom-role')->firstOrFail();

        $this->actingAs($user)
            ->put(route('secretaria.roles.update', $role), [
                'name' => 'custom-role',
                'label' => 'Custom Role Editado',
                'active' => true,
            ])
            ->assertRedirect(route('secretaria.roles.index'));

        $this->actingAs($user)
            ->delete(route('secretaria.roles.destroy', $role))
            ->assertRedirect(route('secretaria.roles.index'));

        $this->assertDatabaseMissing('roles', ['id' => $role->id]);
    }

    public function test_nao_exclui_role_em_uso(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);
        $role = Role::query()->create(['name' => 'em-uso', 'label' => 'Em uso', 'active' => true]);
        User::factory()->create()->roles()->sync([$role->id]);

        $this->actingAs($user)
            ->delete(route('secretaria.roles.destroy', $role))
            ->assertRedirect(route('secretaria.roles.index'))
            ->assertSessionHas('status', 'O papel não pode ser excluído porque possui usuários vinculados.');
    }

    public function test_permission_manage_cria_edita_e_exclui_permissao(): void
    {
        $user = $this->superAdminWithPermissions(['permission.view', 'permission.manage']);

        $this->actingAs($user)
            ->post(route('secretaria.permissions.store'), [
                'name' => 'custom.permission',
                'label' => 'Custom Permission',
                'module' => 'custom',
                'active' => true,
            ])
            ->assertRedirect(route('secretaria.permissions.index'));

        $permission = Permission::query()->where('name', 'custom.permission')->firstOrFail();

        $this->actingAs($user)
            ->put(route('secretaria.permissions.update', $permission), [
                'name' => 'custom.permission',
                'label' => 'Custom Permission Editada',
                'module' => 'custom',
                'active' => true,
            ])
            ->assertRedirect(route('secretaria.permissions.index'));

        $this->actingAs($user)
            ->delete(route('secretaria.permissions.destroy', $permission))
            ->assertRedirect(route('secretaria.permissions.index'));

        $this->assertDatabaseMissing('permissions', ['id' => $permission->id]);
    }

    public function test_nao_exclui_permissao_em_uso(): void
    {
        $user = $this->superAdminWithPermissions(['permission.view', 'permission.manage']);
        $role = Role::query()->create(['name' => 'role-permissao', 'label' => 'Role Permissao', 'active' => true]);
        $permission = Permission::query()->create(['name' => 'em.uso', 'label' => 'Em uso', 'module' => 'em', 'active' => true]);
        $role->permissions()->sync([$permission->id]);

        $this->actingAs($user)
            ->delete(route('secretaria.permissions.destroy', $permission))
            ->assertRedirect(route('secretaria.permissions.index'))
            ->assertSessionHas('status', 'A permissão não pode ser excluída porque está vinculada a papéis.');
    }

    public function test_role_permissions_update_sincroniza_corretamente(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);
        $role = Role::query()->create(['name' => 'sincronizar', 'label' => 'Sincronizar', 'active' => true]);
        $permission = Permission::query()->create(['name' => 'sync.permission', 'label' => 'Sync', 'module' => 'sync', 'active' => true]);

        $this->actingAs($user)
            ->put(route('secretaria.roles.permissions.update', $role), [
                'permissions' => [$permission->id],
            ])
            ->assertRedirect(route('secretaria.roles.index'));

        $this->assertTrue($role->fresh()->permissions()->whereKey($permission->id)->exists());
    }

    public function test_permissoes_customizadas_nao_sao_removidas_pelo_seeder(): void
    {
        $role = Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);
        $permission = Permission::query()->create(['name' => 'custom.keep', 'label' => 'Custom', 'module' => 'custom', 'active' => true]);
        $role->permissions()->sync([$permission->id]);

        $this->seed(PermissionSeeder::class);

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'custom.keep')->exists());
    }

    public function test_nao_remove_ultimo_super_admin(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);
        $role = Role::query()->where('name', 'super-admin')->firstOrFail();

        $this->actingAs($user)
            ->put(route('secretaria.roles.update', $role), [
                'name' => 'super-admin',
                'label' => 'Super Admin',
                'active' => false,
            ])
            ->assertRedirect(route('secretaria.roles.index'))
            ->assertSessionHas('status', 'Não é possível desativar o último papel super-admin.');

        $this->assertTrue($role->fresh()->active);
    }

    public function test_nao_desativa_permission_critica_de_admin(): void
    {
        $user = $this->superAdminWithPermissions(['permission.view', 'permission.manage']);
        $permission = Permission::query()->updateOrCreate(
            ['name' => 'role.manage'],
            ['label' => 'Gerenciar papéis', 'module' => 'role', 'active' => true]
        );

        $this->actingAs($user)
            ->put(route('secretaria.permissions.update', $permission), [
                'name' => 'role.manage',
                'label' => 'Gerenciar papéis',
                'module' => 'role',
                'active' => false,
            ])
            ->assertRedirect(route('secretaria.permissions.index'))
            ->assertSessionHas('status', 'Não é possível desativar permissão administrativa crítica.');

        $this->assertTrue($permission->fresh()->active);
    }

    public function test_nao_remove_role_manage_do_unico_admin(): void
    {
        $user = $this->superAdminWithPermissions(['role.view', 'role.manage']);
        $role = Role::query()->where('name', 'super-admin')->firstOrFail();
        $roleManage = Permission::query()->where('name', 'role.manage')->firstOrFail();
        $roleView = Permission::query()->where('name', 'role.view')->firstOrFail();
        $dashboard = Permission::query()->updateOrCreate(
            ['name' => 'dashboard.view'],
            ['label' => 'Dashboard', 'module' => 'dashboard', 'active' => true]
        );

        $role->permissions()->sync([$roleView->id, $roleManage->id, $dashboard->id]);

        $this->actingAs($user)
            ->put(route('secretaria.roles.permissions.update', $role), [
                'permissions' => [$roleView->id, $dashboard->id],
            ])
            ->assertRedirect(route('secretaria.roles.index'))
            ->assertSessionHas('status', 'Não é possível remover role.manage do único papel administrador.');

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'role.manage')->exists());
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
}
