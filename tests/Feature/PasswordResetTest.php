<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\SecretariaResetPasswordNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();

        foreach ([
            'password-reset|reset-limit@example.test|127.0.0.1',
            'password-reset|reset-ip@example.test|203.0.113.30',
            'password-reset|reset-ip@example.test|203.0.113.31',
            'password-reset|reset-outro@example.test|203.0.113.30',
        ] as $key) {
            RateLimiter::clear($key);
        }
    }

    public function test_tabela_password_reset_tokens_existe(): void
    {
        $this->assertTrue(Schema::hasTable('password_reset_tokens'));
    }

    public function test_forgot_nao_revela_se_email_existe(): void
    {
        $this->post(route('secretaria.password.email'), ['email' => 'ninguem@example.test'])
            ->assertSessionHas('status');
    }

    public function test_forgot_funciona_em_banco_limpo(): void
    {
        $this->assertDatabaseCount('users', 0);

        $this->post(route('secretaria.password.email'), ['email' => 'ninguem@example.test'])
            ->assertSessionHas('status');
    }

    public function test_forgot_gera_token_para_usuario_existente_e_envia_email(): void
    {
        Notification::fake();
        $user = User::factory()->create(['email' => 'secretaria@example.test']);

        $this->post(route('secretaria.password.email'), ['email' => $user->email])
            ->assertSessionHas('status');

        $this->assertDatabaseHas('password_reset_tokens', ['email' => $user->email]);
        Notification::assertSentTo($user, SecretariaResetPasswordNotification::class);
    }

    public function test_forgot_muitas_solicitacoes_bloqueiam_envio_sem_revelar_email(): void
    {
        Notification::fake();
        $user = User::factory()->create(['email' => 'reset-limit@example.test']);

        for ($attempt = 0; $attempt < 4; $attempt++) {
            $this->post(route('secretaria.password.email'), ['email' => $user->email])
                ->assertSessionHas('status', 'Se o e-mail informado estiver apto para recuperação, as instruções serão disponibilizadas.');
        }

        Notification::assertSentTo($user, SecretariaResetPasswordNotification::class);
        $this->assertTrue(RateLimiter::tooManyAttempts('password-reset|reset-limit@example.test|127.0.0.1', 3));
    }

    public function test_forgot_email_inexistente_e_existente_mantem_mesma_mensagem(): void
    {
        User::factory()->create(['email' => 'reset-existe@example.test']);

        $existente = $this->post(route('secretaria.password.email'), ['email' => 'reset-existe@example.test']);
        $inexistente = $this->post(route('secretaria.password.email'), ['email' => 'reset-inexiste@example.test']);

        $this->assertSame(
            $existente->getSession()->get('status'),
            $inexistente->getSession()->get('status')
        );
    }

    public function test_forgot_rate_limit_eh_por_email_e_ip(): void
    {
        Notification::fake();
        $user = User::factory()->create(['email' => 'reset-ip@example.test']);
        $otherUser = User::factory()->create(['email' => 'reset-outro@example.test']);

        for ($attempt = 0; $attempt < 4; $attempt++) {
            $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.30'])
                ->post(route('secretaria.password.email'), ['email' => $user->email])
                ->assertSessionHas('status');
        }

        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.31'])
            ->post(route('secretaria.password.email'), ['email' => $user->email])
            ->assertSessionHas('status');

        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.30'])
            ->post(route('secretaria.password.email'), ['email' => $otherUser->email])
            ->assertSessionHas('status');

        Notification::assertSentTo($user, SecretariaResetPasswordNotification::class);
        Notification::assertSentTo($otherUser, SecretariaResetPasswordNotification::class);
        $this->assertTrue(RateLimiter::tooManyAttempts('password-reset|reset-ip@example.test|203.0.113.30', 3));
        $this->assertFalse(RateLimiter::tooManyAttempts('password-reset|reset-ip@example.test|203.0.113.31', 3));
        $this->assertFalse(RateLimiter::tooManyAttempts('password-reset|reset-outro@example.test|203.0.113.30', 3));
    }

    public function test_reset_com_token_valido_altera_senha(): void
    {
        $user = User::factory()->create(['email' => 'reset@example.test']);
        $token = Password::createToken($user);

        $this->post(route('secretaria.password.update'), [
            'email' => $user->email,
            'token' => $token,
            'password' => 'nova-senha-segura',
            'password_confirmation' => 'nova-senha-segura',
        ])->assertRedirect(route('secretaria.login'));

        $this->assertTrue(Hash::check('nova-senha-segura', $user->fresh()->password));
    }

    public function test_reset_com_token_invalido_falha(): void
    {
        $user = User::factory()->create(['email' => 'reset-invalido@example.test']);

        $this->post(route('secretaria.password.update'), [
            'email' => $user->email,
            'token' => 'token-invalido',
            'password' => 'nova-senha-segura',
            'password_confirmation' => 'nova-senha-segura',
        ])->assertSessionHasErrors('email');
    }
}
