<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\SecretariaResetPasswordNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
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
