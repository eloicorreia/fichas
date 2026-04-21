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

    <section class="mb-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($cards as $card)
            <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-sm font-semibold uppercase tracking-[0.12em] text-slate-500">
                    {{ $card['title'] }}
                </p>

                <div class="mt-4 text-3xl font-bold text-slate-900">
                    {{ $card['value'] ?? '--' }}
                </div>

                <p class="mt-3 text-sm leading-6 text-slate-600">
                    {{ $card['description'] }}
                </p>
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
                @if(auth()->user()?->hasPermission('evento.view'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Consultar eventos
                    </a>
                @endif

                @if(auth()->user()?->hasPermission('inscricao.view'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Ver inscrições
                    </a>
                @endif

                @if(auth()->user()?->hasPermission('inscricao.review'))
                    <a
                        href="#"
                        class="rounded-2xl border border-slate-200 px-4 py-4 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                    >
                        Revisar inscrições
                    </a>
                @endif

                @if(auth()->user()?->hasPermission('usuario.view'))
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