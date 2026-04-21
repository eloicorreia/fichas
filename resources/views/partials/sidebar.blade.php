<div class="flex h-full flex-col">
    <div class="border-b border-white/10 px-6 py-6">
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-300">
            Painel administrativo
        </p>
        <h2 class="mt-2 text-2xl font-bold text-white">
            Secretaria
        </h2>
        <p class="mt-2 text-sm leading-6 text-slate-300">
            Gerenciamento interno do sistema.
        </p>
    </div>

    <nav class="flex-1 space-y-2 px-4 py-6">
        @if(auth()->user()?->hasPermission('dashboard.view'))
            <a
                href="{{ route('secretaria.dashboard') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition hover:bg-white/10"
            >
                Dashboard
            </a>
        @endif

        @if(auth()->user()?->hasPermission('evento.view'))
            <a
                href="#"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10"
            >
                Eventos
            </a>
        @endif

        @if(auth()->user()?->hasPermission('inscricao.view'))
            <a
                href="#"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10"
            >
                Inscrições
            </a>
        @endif

        @if(auth()->user()?->hasPermission('usuario.view'))
            <a
                href="#"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10"
            >
                Usuários
            </a>
        @endif
    </nav>

    <div class="border-t border-white/10 px-6 py-5">
        <form method="POST" action="{{ route('secretaria.logout') }}">
            @csrf

            <button
                type="submit"
                class="inline-flex w-full items-center justify-center rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/20"
            >
                Sair
            </button>
        </form>
    </div>
</div>