@php
    use Illuminate\Support\Facades\Route;

    $user = auth()->user();
    $sidebarCounters = $sidebarCounters ?? [];

    $isDashboard = request()->routeIs('secretaria.dashboard');
    $isEventos = request()->routeIs('secretaria.eventos.*');
    $isInscricoes = request()->routeIs('secretaria.inscricoes.*');
    $isUsuarios = request()->routeIs('secretaria.users.*');
    $isRoles = request()->routeIs('secretaria.roles.*');
    $isPermissions = request()->routeIs('secretaria.permissions.*');

    $hasDashboard = $user?->hasPermission('dashboard.view') ?? false;
    $hasEventos = ($user?->hasPermission('evento.view') ?? false)
        || ($user?->hasPermission('evento.create') ?? false)
        || ($user?->hasPermission('evento.update') ?? false)
        || ($user?->hasPermission('evento.delete') ?? false);

    $hasInscricoes = ($user?->hasPermission('inscricao.view') ?? false)
        || ($user?->hasPermission('inscricao.review') ?? false);

    $hasUsuarios = ($user?->hasPermission('usuario.view') ?? false)
        || ($user?->hasPermission('usuario.manage') ?? false);

    $hasRoles = ($user?->hasPermission('role.view') ?? false)
        || ($user?->hasPermission('role.manage') ?? false);

    $hasPermissions = ($user?->hasPermission('permission.view') ?? false)
        || ($user?->hasPermission('permission.manage') ?? false);

    $operacaoOpen = $isDashboard || $isEventos || $isInscricoes;
    $segurancaOpen = $isUsuarios || $isRoles || $isPermissions;

    $dashboardUrl = Route::has('secretaria.dashboard') ? route('secretaria.dashboard') : null;
    $eventosUrl = Route::has('secretaria.eventos.index') ? route('secretaria.eventos.index') : null;
    $inscricoesUrl = Route::has('secretaria.inscricoes.index') ? route('secretaria.inscricoes.index') : null;
    $usuariosUrl = Route::has('secretaria.users.index') ? route('secretaria.users.index') : null;
    $rolesUrl = Route::has('secretaria.roles.index') ? route('secretaria.roles.index') : null;
    $permissionsUrl = Route::has('secretaria.permissions.index') ? route('secretaria.permissions.index') : null;

    $operacaoSlot = '';

    if ($hasDashboard) {
        $operacaoSlot .= view('partials.sidebar.item', [
            'label' => 'Dashboard',
            'icon' => 'home',
            'href' => $dashboardUrl,
            'active' => $isDashboard,
        ])->render();
    }

    if ($hasEventos) {
        $operacaoSlot .= view('partials.sidebar.item', [
            'label' => 'Eventos',
            'icon' => 'calendar',
            'href' => $eventosUrl,
            'active' => $isEventos,
            'disabled' => is_null($eventosUrl),
            'title' => 'Módulo em construção',
        ])->render();
    }

    if ($hasInscricoes) {
        $operacaoSlot .= view('partials.sidebar.item', [
            'label' => 'Inscrições',
            'icon' => 'clipboard',
            'href' => $inscricoesUrl,
            'active' => $isInscricoes,
            'disabled' => is_null($inscricoesUrl),
            'title' => 'Módulo em construção',
            'badge' => $sidebarCounters['inscricoes_pendentes'] ?? null,
        ])->render();
    }

    $segurancaSlot = '';

    if ($hasUsuarios) {
        $segurancaSlot .= view('partials.sidebar.item', [
            'label' => 'Usuários',
            'icon' => 'users',
            'href' => $usuariosUrl,
            'active' => $isUsuarios,
            'disabled' => is_null($usuariosUrl),
            'title' => 'Módulo em construção',
        ])->render();
    }

    if ($hasRoles) {
        $segurancaSlot .= view('partials.sidebar.item', [
            'label' => 'Papéis',
            'icon' => 'shield',
            'href' => $rolesUrl,
            'active' => $isRoles,
            'disabled' => is_null($rolesUrl),
            'title' => 'Módulo em construção',
        ])->render();
    }

    if ($hasPermissions) {
        $segurancaSlot .= view('partials.sidebar.item', [
            'label' => 'Permissões',
            'icon' => 'key',
            'href' => $permissionsUrl,
            'active' => $isPermissions,
            'disabled' => is_null($permissionsUrl),
            'title' => 'Módulo em construção',
        ])->render();
    }
@endphp

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

    <nav class="flex-1 space-y-4 overflow-y-auto px-4 py-6">
        @include('partials.sidebar.group', [
            'title' => 'Operação',
            'icon' => 'clipboard',
            'open' => $operacaoOpen,
            'critical' => false,
            'slot' => $operacaoSlot,
        ])

        @if ($hasUsuarios || $hasRoles || $hasPermissions)
            <div class="pt-2">
                <p class="px-3 pb-2 text-[11px] font-semibold uppercase tracking-[0.18em] text-rose-200/90">
                    Área crítica
                </p>

                @include('partials.sidebar.group', [
                    'title' => 'Segurança',
                    'icon' => 'shield',
                    'open' => $segurancaOpen,
                    'critical' => true,
                    'slot' => $segurancaSlot,
                ])
            </div>
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