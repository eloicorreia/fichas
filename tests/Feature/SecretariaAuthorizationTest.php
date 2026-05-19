<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class SecretariaAuthorizationTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_visitante_recebe_redirect_para_login_em_rotas_criticas(): void
    {
        $this->get(route('secretaria.eventos.index'))
            ->assertRedirect(route('secretaria.login'));

        $this->get(route('secretaria.inscricoes.index'))
            ->assertRedirect(route('secretaria.login'));
    }

    public function test_usuario_sem_role_secretaria_ou_super_admin_nao_acessa_secretaria(): void
    {
        $user = $this->userWithRoleAndPermissions('visitante', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertForbidden();
    }

    public function test_usuario_com_role_sem_permissao_recebe_403(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', []);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertForbidden();
    }

    public function test_usuario_com_permissao_correta_acessa_rota(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertOk();
    }

    public function test_usuario_com_role_mas_sem_permissao_critica_nao_acessa_inscricoes(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['evento.view']);

        $this->actingAs($user)
            ->get(route('secretaria.inscricoes.index'))
            ->assertForbidden();
    }

    /**
     * @param  array<int, string>  $permissions
     */
    private function userWithRoleAndPermissions(string $roleName, array $permissions): User
    {
        $user = User::factory()->create();
        $role = Role::query()->create(['name' => $roleName, 'label' => ucfirst($roleName), 'active' => true]);

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
