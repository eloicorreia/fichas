<?php

namespace App\Http\Controllers\Secretaria\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if (!Auth::attempt($credentials, $remember)) {
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

        return back()->with(
            'status',
            'Se o e-mail informado estiver apto para recuperação, as instruções serão disponibilizadas.'
        );
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