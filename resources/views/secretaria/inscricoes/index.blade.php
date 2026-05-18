@extends('layouts.secretaria')

@php
    $evento = $evento ?? null;
    $eventos = $eventos ?? collect();
    $inscricoes = $inscricoes ?? collect();
    $q = $q ?? '';
    $eventoId = $eventoId ?? '';
    $status = $status ?? '';
    $pagamento = $pagamento ?? '';
    $sort = $sort ?? 'nome';
    $dir = $dir ?? 'asc';
    $statusDisponiveis = $statusDisponiveis ?? [];

    $eventoSelecionado = null;

    if (!$evento && filled($eventoId) && $eventos instanceof \Illuminate\Support\Collection) {
        $eventoSelecionado = $eventos->firstWhere('id', (int) $eventoId);
    }

    $eventoContexto = $evento ?? $eventoSelecionado;
    $usuario = auth()->user();
    $podeIncluir = $usuario?->hasPermission('inscricao.create') || $usuario?->hasPermission('inscricao.review');

    $baseRoute = $evento
        ? route('secretaria.eventos.inscricoes.index', $evento)
        : route('secretaria.inscricoes.index');

    $exportRoute = $evento
        ? route('secretaria.eventos.inscricoes.export', ['evento' => $evento] + request()->query())
        : route('secretaria.inscricoes.export', request()->query());

    $makeSortUrl = function (string $column) {
        $query = request()->query();
        $currentSort = $query['sort'] ?? 'nome';
        $currentDir = $query['dir'] ?? 'asc';

        $query['sort'] = $column;
        $query['dir'] = ($currentSort === $column && $currentDir === 'asc') ? 'desc' : 'asc';

        return url()->current() . '?' . http_build_query($query);
    };

    $sortIndicator = function (string $column) use ($sort, $dir): string {
        if ($sort !== $column) {
            return '↕';
        }

        return $dir === 'asc' ? '↑' : '↓';
    };
@endphp

@section('title', 'Secretaria | Inscrições')
@section('page-title', $evento ? 'Inscrições do evento' : 'Inscrições')

@section('content')
    <section class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900">
                {{ $evento ? $evento->nome : 'Lista de inscrições' }}
            </h2>

            <p class="mt-1 text-sm text-slate-600">
                {{ $evento ? 'Gerencie as inscrições vinculadas a este evento.' : 'Consulte as inscrições administrativas do sistema.' }}
            </p>
        </div>

        <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
            @if ($eventoContexto && $podeIncluir)
                <a
                    href="{{ route('secretaria.eventos.inscricoes.create', $eventoContexto) }}"
                    data-testid="incluir-inscricao"
                    class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
                >
                    Incluir inscrição
                </a>
            @endif

            @if ($usuario?->hasPermission('inscricao.export'))
                <a
                    href="{{ $exportRoute }}"
                    data-testid="exportar-inscricoes"
                    class="inline-flex items-center justify-center rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700 transition hover:bg-emerald-100"
                >
                    Exportar
                </a>
            @endif
        </div>
    </section>

    <section class="mb-4">
        <form method="GET" action="{{ $baseRoute }}" class="flex flex-col gap-2 lg:flex-row lg:items-center">
            <input
                type="text"
                name="q"
                value="{{ $q }}"
                placeholder="Buscar por nome, CPF, e-mail ou telefone"
                class="w-full min-w-[260px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
            >

            @unless ($evento)
                <select
                    name="evento_id"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os eventos</option>

                    @foreach ($eventos as $eventoOption)
                        <option value="{{ $eventoOption->id }}" @selected((string) $eventoId === (string) $eventoOption->id)>
                            {{ $eventoOption->numero }} - {{ $eventoOption->nome }}
                        </option>
                    @endforeach
                </select>
            @endunless

            <select
                name="status"
                class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
            >
                <option value="">Todos os status</option>

                @foreach ($statusDisponiveis as $statusItem)
                    <option value="{{ $statusItem }}" @selected($status === $statusItem)>
                        {{ $statusItem }}
                    </option>
                @endforeach
            </select>

            <select
                name="pagamento"
                class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
            >
                <option value="">Todos os pagamentos</option>
                <option value="confirmado" @selected($pagamento === 'confirmado')>Confirmado</option>
                <option value="pendente" @selected($pagamento === 'pendente')>Pendente</option>
            </select>

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
            >
                Buscar
            </button>

            @if (filled($q) || filled($eventoId) || filled($status) || filled($pagamento))
                <a
                    href="{{ $baseRoute }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                >
                    Limpar
                </a>
            @endif
        </form>
    </section>

    <x-admin.table-shell :paginator="$inscricoes">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left">
                        <a href="{{ $makeSortUrl('nome') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>Nome</span>
                            <span class="text-[10px]">{{ $sortIndicator('nome') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-left">
                        <a href="{{ $makeSortUrl('cpf') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>CPF</span>
                            <span class="text-[10px]">{{ $sortIndicator('cpf') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-left">
                        <a href="{{ $makeSortUrl('telefone') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>Telefone</span>
                            <span class="text-[10px]">{{ $sortIndicator('telefone') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-left">
                        <a href="{{ $makeSortUrl('email') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>E-mail</span>
                            <span class="text-[10px]">{{ $sortIndicator('email') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-left">
                        <a href="{{ $makeSortUrl('evento') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>Evento</span>
                            <span class="text-[10px]">{{ $sortIndicator('evento') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-center">
                        <a href="{{ $makeSortUrl('status_ficha') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>Status</span>
                            <span class="text-[10px]">{{ $sortIndicator('status_ficha') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-center">
                        <a href="{{ $makeSortUrl('pagamento_confirmado') }}"
                           class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700">
                            <span>Pagamento</span>
                            <span class="text-[10px]">{{ $sortIndicator('pagamento_confirmado') }}</span>
                        </a>
                    </th>

                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Ações
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($inscricoes as $inscricao)
                    <tr>
                        <td class="px-3 py-2.5 font-semibold text-slate-900">
                            {{ $inscricao->nome }}
                        </td>

                        <td class="px-3 py-2.5 text-sm text-slate-700">
                            {{ $inscricao->cpf ?: '-' }}
                        </td>

                        <td class="px-3 py-2.5 text-sm text-slate-700">
                            {{ $inscricao->telefone_formatado ?: '-' }}
                        </td>

                        <td class="px-3 py-2.5 text-sm text-slate-700">
                            {{ $inscricao->email ?: '-' }}
                        </td>

                        <td class="px-3 py-2.5 text-sm text-slate-700">
                            {{ $inscricao->evento_label }}
                        </td>

                        <td class="px-3 py-2.5 text-center">
                            <span class="inline-flex rounded-full px-2.5 py-0.5 text-[11px] font-semibold bg-slate-100 text-slate-700 ring-1 ring-inset ring-slate-200">
                                {{ $inscricao->status_ficha }}
                            </span>
                        </td>

                        <td class="px-3 py-2.5 text-center">
                            <span class="inline-flex rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $inscricao->pagamento_confirmado ? 'bg-emerald-50 text-emerald-700 ring-1 ring-inset ring-emerald-100' : 'bg-amber-50 text-amber-700 ring-1 ring-inset ring-amber-100' }}">
                                {{ $inscricao->pagamento_status }}
                            </span>
                        </td>

                        <td class="px-3 py-2.5">
                            <div class="flex justify-end gap-1.5">
                                @if ($evento)
                                    <a
                                        href="{{ route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]) }}"
                                        class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>

                                    <form method="POST"
                                          action="{{ route('secretaria.eventos.inscricoes.destroy', [$evento, $inscricao]) }}"
                                          onsubmit="return confirm('Deseja realmente excluir esta inscrição?');">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex rounded-lg border border-rose-200 px-2.5 py-1.5 text-xs font-medium text-rose-700 transition hover:bg-rose-50"
                                        >
                                            Excluir
                                        </button>
                                    </form>
                                @elseif ($inscricao->evento)
                                    <a
                                        href="{{ route('secretaria.eventos.inscricoes.edit', [$inscricao->evento, $inscricao]) }}"
                                        class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>

                                    <form method="POST"
                                          action="{{ route('secretaria.eventos.inscricoes.destroy', [$inscricao->evento, $inscricao]) }}"
                                          onsubmit="return confirm('Deseja realmente excluir esta inscrição?');">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex rounded-lg border border-rose-200 px-2.5 py-1.5 text-xs font-medium text-rose-700 transition hover:bg-rose-50"
                                        >
                                            Excluir
                                        </button>
                                    </form>
                                @else
                                    <span class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-400">
                                        Sem evento
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-4 py-8 text-center text-sm text-slate-500">
                            Nenhuma inscrição encontrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection
