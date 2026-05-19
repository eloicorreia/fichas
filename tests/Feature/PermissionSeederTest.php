<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use Database\Seeders\PermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class PermissionSeederTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_permission_seeder_nao_remove_permissao_customizada_da_secretaria(): void
    {
        $role = Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);
        $custom = Permission::query()->create(['name' => 'custom.keep', 'label' => 'Custom', 'module' => 'custom', 'active' => true]);
        $role->permissions()->attach($custom->id);

        $this->seed(PermissionSeeder::class);

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'custom.keep')->exists());
    }

    public function test_permission_seeder_adiciona_permissoes_padrao(): void
    {
        Role::query()->create(['name' => 'secretaria', 'label' => 'Secretaria', 'active' => true]);

        $this->seed(PermissionSeeder::class);

        $this->assertDatabaseHas('permissions', ['name' => 'inscricao.view']);
        $this->assertTrue(Role::query()->where('name', 'secretaria')->first()->permissions()->where('permissions.name', 'inscricao.view')->exists());
    }

    public function test_permission_seeder_mantem_super_admin_com_todas(): void
    {
        $role = Role::query()->create(['name' => 'super-admin', 'label' => 'Super Admin', 'active' => true]);
        Permission::query()->create(['name' => 'custom.all', 'label' => 'Custom', 'module' => 'custom', 'active' => true]);

        $this->seed(PermissionSeeder::class);

        $this->assertTrue($role->fresh()->permissions()->where('permissions.name', 'custom.all')->exists());
    }
}
