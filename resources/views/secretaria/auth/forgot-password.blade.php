@extends('layouts.auth')

@section('title', 'Secretaria | Esqueci minha senha')

@section('content')
    <main class="flex min-h-screen items-center justify-center px-4 py-10">
        <div class="grid w-full max-w-6xl overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-2xl lg:grid-cols-2">
            <section class="hidden lg:flex lg:flex-col lg:justify-between bg-slate-900 p-10 text-white">
                <div>
                    <div class="inline-flex items-center rounded-full border border-white/20 px-3 py-1 text-xs font-semibold tracking-wide uppercase text-slate-200">
                        Secretaria
                    </div>

                    <h1 class="mt-6 text-4xl font-bold leading-tight">
                        Recuperação de acesso
                    </h1>

                    <p class="mt-4 max-w-md text-sm leading-6 text-slate-300">
                        Informe seu usuário para iniciar o processo de recuperação de senha
                        da área administrativa.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                        <p class="text-sm font-semibold text-white">
                            Processo controlado
                        </p>
                        <p class="mt-2 text-sm leading-6 text-slate-300">
                            A redefinição deve seguir as regras de segurança e validação
                            definidas pela secretaria.
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        © {{ date('Y') }} Secretaria. Todos os direitos reservados.
                    </p>
                </div>
            </section>

            <section class="flex items-center justify-center bg-white p-6 sm:p-10">
                <div class="w-full max-w-md">
                    <div class="mb-8">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-700">
                            Recuperar acesso
                        </p>
                        <h2 class="mt-2 text-3xl font-bold text-slate-900">
                            Esqueci minha senha
                        </h2>
                        <p class="mt-2 text-sm text-slate-500">
                            Informe seu usuário para prosseguir com a recuperação.
                        </p>
                    </div>

                    @if (session('status'))
                        <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                            <div class="font-semibold">Não foi possível processar a solicitação.</div>
                            <ul class="mt-2 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('secretaria.password.email') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
                                E-mail
                            </label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                autocomplete="username"
                                required
                                autofocus
                                maxlength="150"
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                                placeholder="Digite seu e-mail"
                            >
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-200"
                        >
                            Continuar
                        </button>
                    </form>

                    <div class="mt-6 border-t border-slate-200 pt-6">
                        <p class="text-xs leading-5 text-slate-500">
                            O acesso será tratado conforme as regras de segurança da aplicação.
                        </p>

                        <div class="mt-4">
                            <a
                                href="{{ route('secretaria.login') }}"
                                class="inline-flex items-center text-sm font-medium text-sky-700 transition hover:text-sky-800"
                            >
                                ← Voltar para o login
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection