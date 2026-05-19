@extends('layouts.auth')

@section('title', 'Secretaria | Redefinir senha')

@section('content')
    <main class="flex min-h-screen items-center justify-center px-4 py-10">
        <section class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-8 shadow-2xl">
            <div class="mb-8">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-700">
                    Recuperar acesso
                </p>
                <h1 class="mt-2 text-3xl font-bold text-slate-900">
                    Redefinir senha
                </h1>
            </div>

            @if ($errors->any())
                <div class="mb-4 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                    <div class="font-semibold">Não foi possível redefinir a senha.</div>
                    <ul class="mt-2 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('secretaria.password.update') }}" class="space-y-5">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
                        E-mail
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email', $email) }}"
                        required
                        autocomplete="username"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                    >
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-slate-700">
                        Nova senha
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="new-password"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                    >
                </div>

                <div>
                    <label for="password_confirmation" class="mb-2 block text-sm font-medium text-slate-700">
                        Confirmar senha
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                        autocomplete="new-password"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100"
                    >
                </div>

                <button
                    type="submit"
                    class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-200"
                >
                    Redefinir senha
                </button>
            </form>
        </section>
    </main>
@endsection
