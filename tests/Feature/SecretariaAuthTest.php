<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class SecretariaAuthTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_login_com_credenciais_validas(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view']);

        $this->post(route('secretaria.login.attempt'), [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('secretaria.dashboard'));

        $this->assertAuthenticatedAs($user);
    }

    public function test_login_com_credenciais_invalidas(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('senha-correta'),
        ]);

        $this->post(route('secretaria.login.attempt'), [
            'email' => $user->email,
            'password' => 'senha-errada',
        ])->assertSessionHasErrors('email');

        $this->assertGuest();
    }

    public function test_logout_invalida_sessao(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view']);

        $this->actingAs($user)
            ->withSession(['marcador' => 'ativo'])
            ->post(route('secretaria.logout'))
            ->assertRedirect(route('secretaria.login'));

        $this->assertGuest();
        $this->assertNull(session('marcador'));
    }

    public function test_usuario_sem_role_nao_acessa_secretaria(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('secretaria.eventos.index'))
            ->assertForbidden();
    }

    public function test_usuario_sem_permissao_dashboard_nao_acessa_dashboard(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', []);

        $this->actingAs($user)
            ->get(route('secretaria.dashboard'))
            ->assertForbidden();
    }

    public function test_forgot_password_nao_revela_email_existente(): void
    {
        User::factory()->create(['email' => 'existe@example.test']);

        $responseExistente = $this->post(route('secretaria.password.email'), ['email' => 'existe@example.test']);
        $responseInexistente = $this->post(route('secretaria.password.email'), ['email' => 'nao-existe@example.test']);

        $this->assertSame(
            $responseExistente->getSession()->get('status'),
            $responseInexistente->getSession()->get('status')
        );
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
