@extends('layouts.auth')

@section('title', 'Secretaria | Entrar')

@section('content')
    <main class="flex min-h-screen items-center justify-center px-4 py-10">
        <div class="grid w-full max-w-6xl overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-2xl lg:grid-cols-2">
            <section class="hidden lg:flex lg:flex-col lg:justify-between bg-slate-900 p-10 text-white">
                <div>
                    <div class="inline-flex items-center rounded-full border border-white/20 px-3 py-1 text-xs font-semibold tracking-wide uppercase text-slate-200">
                        Secretaria
                    </div>

                    <h1 class="mt-6 text-4xl font-bold leading-tight">
                        Área administrativa
                    </h1>

                    <p class="mt-4 max-w-md text-sm leading-6 text-slate-300">
                        Acesse o painel administrativo para gerenciamento interno do sistema.
                        Utilize suas credenciais de acesso fornecidas pela secretaria.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                        <p class="text-sm font-semibold text-white">
                            Acesso restrito
                        </p>
                        <p class="mt-2 text-sm leading-6 text-slate-300">
                            Esta área é destinada exclusivamente aos usuários autorizados.
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
                            Bem-vindo de volta
                        </p>
                        <h2 class="mt-2 text-3xl font-bold text-slate-900">
                            Entrar
                        </h2>
                        <p class="mt-2 text-sm text-slate-500">
                            Informe seu usuário e senha para acessar a área administrativa.
                        </p>
                    </div>

                    @if (session('status'))
                        <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                            <div class="font-semibold">Não foi possível autenticar.</div>
                            <ul class="mt-2 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('secretaria.login.attempt') }}" class="space-y-5">
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
                                autofocus
                                required
                                maxlength="150"
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                                placeholder="Digite seu e-mail"
                            >
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between gap-4">
                                <label for="password" class="block text-sm font-medium text-slate-700">
                                    Senha
                                </label>

                                <a
                                    href="{{ route('secretaria.password.request') }}"
                                    class="text-sm font-medium text-sky-700 transition hover:text-sky-800"
                                    tabindex="-1"
                                >
                                    Esqueci minha senha
                                </a>
                            </div>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                                placeholder="Digite sua senha"
                            >
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <label class="inline-flex items-center gap-3 text-sm text-slate-600">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    value="1"
                                    class="h-4 w-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500"
                                >
                                <span>Lembrar-me</span>
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-200"
                        >
                            Entrar
                        </button>
                    </form>

                    <div class="mt-8 border-t border-slate-200 pt-6">
                        <p class="text-xs leading-5 text-slate-500">
                            Ao acessar esta área, você concorda com as políticas internas de uso
                            e auditoria do sistema.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection