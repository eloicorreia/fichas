@extends('layouts.secretaria')

@section('title', 'Secretaria | Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <section class="mb-8">
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-700">
                Bem-vindo
            </p>

            <h2 class="mt-2 text-3xl font-bold text-slate-900">
                Olá, {{ auth()->user()->name ?? 'usuário' }}
            </h2>

            <p class="mt-3 max-w-3xl text-sm leading-6 text-slate-600">
                Este é o painel inicial da secretaria. A partir daqui você poderá acompanhar
                o andamento operacional do sistema, acessar cadastros, revisar inscrições
                e administrar os recursos disponíveis conforme suas permissões.
            </p>
        </div>
    </section>

    <section class="mb-8 grid gap-5 md:grid-cols-2">
        @foreach ($cards as $card)
            @php
                $eventosEstruturados = $card['events'] ?? [];
                $descricao = trim((string) ($card['description'] ?? ''));
            @endphp

            <article class="flex h-full flex-col rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.12em] text-slate-500">
                            {{ $card['title'] }}
                        </p>

                        @if (($card['show_value'] ?? true) === true)
                            <div class="mt-4 text-5xl font-bold leading-none text-slate-900">
                                {{ $card['value'] }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-5 flex-1">
                    @if (!empty($eventosEstruturados))
                        <div class="space-y-3">
                            @foreach ($eventosEstruturados as $evento)
                                <div class="rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3">
                                    <div class="text-sm font-semibold text-slate-800">
                                        {{ $evento['name'] }}
                                    </div>

                                    @if (!empty($evento['badges']))
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            @foreach ($evento['badges'] as $badge)
                                                @php
                                                    $badgeClasses = match ($badge['type'] ?? 'primary') {
                                                        'success' => 'bg-emerald-50 text-emerald-700 ring-emerald-100',
                                                        'danger' => 'bg-rose-50 text-rose-700 ring-rose-100',
                                                        default => 'bg-sky-50 text-sky-800 ring-sky-100',
                                                    };
                                                @endphp

                                                <span
                                                    class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $badgeClasses }}"
                                                >
                                                    <span>{{ $badge['label'] }}</span>
                                                    <span class="rounded-full bg-white/80 px-2 py-0.5 text-[11px] font-bold">
                                                        {{ $badge['value'] }}
                                                    </span>
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-sm leading-6 text-slate-600">
                            {{ $descricao }}
                        </p>
                    @endif
                </div>

                @if (!empty($card['action_url']) && !empty($card['action_label']))
                    <div class="mt-5 border-t border-slate-100 pt-4">
                        <a
                            href="{{ $card['action_url'] }}"
                            class="inline-flex items-center text-sm font-semibold text-sky-700 transition hover:text-sky-800"
                        >
                            {{ $card['action_label'] }}
                            <span class="ml-2" aria-hidden="true">→</span>
                        </a>
                    </div>
                @endif
            </article>
        @endforeach
    </section>

    <section class="grid gap-6 lg:grid-cols-[minmax(0,1.3fr)_minmax(280px,0.7fr)]">
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-900">
                Atalhos rápidos
            </h3>

            <p class="mt-2 text-sm text-slate-600">
                Acesse rapidamente os principais pontos operacionais da secretaria.
            </p>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                @if (auth()->user()?->hasPermission('evento.view'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Consultar eventos
                    </a>
                @endif

                @if (auth()->user()?->hasPermission('inscricao.view'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Ver inscrições
                    </a>
                @endif

                @if (auth()->user()?->hasPermission('inscricao.review'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Revisar inscrições
                    </a>
                @endif

                @if (auth()->user()?->hasPermission('usuario.view'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Gerenciar acessos
                    </a>
                @endif
            </div>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-900">
                Observações
            </h3>

            <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-600">
                <li>• O conteúdo do dashboard pode ser expandido gradualmente.</li>
                <li>• Os atalhos respeitam as permissões RBAC do usuário autenticado.</li>
                <li>• As métricas ainda podem ser ligadas às tabelas reais do sistema.</li>
            </ul>
        </div>
    </section>
@endsection