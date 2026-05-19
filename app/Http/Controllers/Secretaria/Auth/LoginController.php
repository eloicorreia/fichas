<?php

namespace App\Http\Controllers\Secretaria\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRule;

class LoginController extends Controller
{
    /**
     * Exibe a tela de login da secretaria.
     */
    public function create(): View
    {
        return view('secretaria.auth.login');
    }

    /**
     * Processa a autenticação da secretaria.
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (! Auth::attempt($credentials, $remember)) {
            return back()
                ->withErrors([
                    'email' => 'As credenciais informadas são inválidas.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->route('secretaria.dashboard');
    }

    /**
     * Exibe a tela de recuperação de senha da secretaria.
     */
    public function forgotPassword(): View
    {
        return view('secretaria.auth.forgot-password');
    }

    /**
     * Recebe a solicitação inicial de recuperação de senha.
     */
    public function sendResetLink(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        Password::sendResetLink($request->only('email'));

        return back()->with(
            'status',
            'Se o e-mail informado estiver apto para recuperação, as instruções serão disponibilizadas.'
        );
    }

    public function resetPassword(string $token, Request $request): View
    {
        return view('secretaria.auth.reset-password', [
            'token' => $token,
            'email' => $request->query('email', ''),
        ]);
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'token' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', PasswordRule::defaults()],
        ]);

        $status = Password::reset(
            $validated,
            function ($user, string $password): void {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        if ($status !== Password::PASSWORD_RESET) {
            return back()
                ->withErrors(['email' => 'Não foi possível redefinir a senha com os dados informados.'])
                ->onlyInput('email');
        }

        return redirect()
            ->route('secretaria.login')
            ->with('status', 'Senha redefinida com sucesso.');
    }

    /**
     * Finaliza a sessão do usuário autenticado.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('secretaria.login');
    }
}
