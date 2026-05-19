<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
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

        foreach ([
            'login|limite@example.test|127.0.0.1',
            'login|limpa-rate@example.test|127.0.0.1',
            'login|ip-email@example.test|203.0.113.10',
            'login|ip-email@example.test|203.0.113.20',
            'login|outro-ip-email@example.test|203.0.113.10',
        ] as $key) {
            RateLimiter::clear($key);
        }
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

    public function test_usuario_inativo_nao_loga(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], ['active' => false]);

        $this->post(route('secretaria.login.attempt'), [
            'email' => $user->email,
            'password' => 'password',
        ])->assertSessionHasErrors('email');

        $this->assertGuest();
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

    public function test_login_bloqueia_apos_muitas_tentativas(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], [
            'email' => 'limite@example.test',
        ]);

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->post(route('secretaria.login.attempt'), [
                'email' => $user->email,
                'password' => 'senha-errada',
            ])->assertSessionHasErrors([
                'email' => 'As credenciais informadas são inválidas.',
            ]);
        }

        $this->post(route('secretaria.login.attempt'), [
            'email' => $user->email,
            'password' => 'senha-errada',
        ])->assertSessionHasErrors([
            'email' => 'Muitas tentativas de acesso. Aguarde um minuto e tente novamente.',
        ]);
    }

    public function test_login_valido_limpa_rate_limit(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], [
            'email' => 'limpa-rate@example.test',
        ]);

        for ($attempt = 0; $attempt < 4; $attempt++) {
            $this->post(route('secretaria.login.attempt'), [
                'email' => $user->email,
                'password' => 'senha-errada',
            ]);
        }

        $this->post(route('secretaria.login.attempt'), [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('secretaria.dashboard'));

        $this->post(route('secretaria.logout'));

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->post(route('secretaria.login.attempt'), [
                'email' => $user->email,
                'password' => 'senha-errada',
            ])->assertSessionHasErrors([
                'email' => 'As credenciais informadas são inválidas.',
            ]);
        }
    }

    public function test_login_rate_limit_eh_por_email_e_ip(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], [
            'email' => 'ip-email@example.test',
        ]);
        $otherUser = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], [
            'email' => 'outro-ip-email@example.test',
        ]);

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10'])
                ->post(route('secretaria.login.attempt'), [
                    'email' => $user->email,
                    'password' => 'senha-errada',
                ]);
        }

        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10'])
            ->post(route('secretaria.login.attempt'), [
                'email' => $user->email,
                'password' => 'senha-errada',
            ])->assertSessionHasErrors([
                'email' => 'Muitas tentativas de acesso. Aguarde um minuto e tente novamente.',
            ]);

        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.20'])
            ->post(route('secretaria.login.attempt'), [
                'email' => $user->email,
                'password' => 'senha-errada',
            ])->assertSessionHasErrors([
                'email' => 'As credenciais informadas são inválidas.',
            ]);

        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10'])
            ->post(route('secretaria.login.attempt'), [
                'email' => $otherUser->email,
                'password' => 'senha-errada',
            ])->assertSessionHasErrors([
                'email' => 'As credenciais informadas são inválidas.',
            ]);
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

    public function test_usuario_inativo_autenticado_nao_acessa_secretaria(): void
    {
        $user = $this->userWithRoleAndPermissions('secretaria', ['dashboard.view'], ['active' => false]);

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
    private function userWithRoleAndPermissions(string $roleName, array $permissions, array $attributes = []): User
    {
        $user = User::factory()->create($attributes);
        $role = Role::query()->firstOrCreate(
            ['name' => $roleName],
            ['label' => ucfirst($roleName), 'active' => true]
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
}
