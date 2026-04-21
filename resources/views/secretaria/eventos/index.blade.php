@extends('layouts.secretaria')

@section('title', 'Secretaria | Eventos')
@section('page-title', 'Eventos')

@section('content')
    <div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900">Lista de eventos</h2>
            <p class="mt-1 text-sm text-slate-600">
                Consulte, altere, exclua e cadastre eventos.
            </p>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <form method="GET" action="{{ route('secretaria.eventos.index') }}" class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <input
                    type="text"
                    name="q"
                    value="{{ $q ?? '' }}"
                    placeholder="Buscar por nome, tipo, público, número ou cidade"
                    class="w-full min-w-[280px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >

                <select
                    name="status"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os status</option>
                    @foreach ($statusDisponiveis as $statusItem)
                        <option value="{{ $statusItem }}" @selected(($status ?? '') === $statusItem)>
                            {{ $statusItem }}
                        </option>
                    @endforeach
                </select>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                >
                    Buscar
                </button>

                @if (filled($q) || filled($status))
                    <a
                        href="{{ route('secretaria.eventos.index') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >
                        Limpar
                    </a>
                @endif
            </form>

            <a
                href="{{ route('secretaria.eventos.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
            >
                Incluir evento
            </a>
        </div>
    </div>

    <x-admin.table-shell :paginator="$eventos">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Evento" column="nome" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Tipo" column="tipo_evento" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Público" column="publico_evento" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Número" column="numero" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Início" column="inicio_em" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Status" column="status" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Inscritos" column="inscricoes_count" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Ações
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($eventos as $evento)
                    <tr>
                        <td class="px-3 py-2.5">
                            <div class="font-semibold text-slate-900">{{ $evento->nome }}</div>
                            @if ($evento->descricao_publica_curta)
                                <div class="mt-0.5 text-xs text-slate-500">{{ $evento->descricao_publica_curta }}</div>
                            @endif
                        </td>

                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $evento->tipo_evento }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $evento->publico_evento }}</td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $evento->numero }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">
                            {{ optional($evento->inicio_em)?->format('d/m/Y H:i') ?? '-' }}
                        </td>
                        <td class="px-3 py-2.5 text-center">
                            <span class="inline-flex rounded-full px-2.5 py-0.5 text-[11px] font-semibold bg-slate-100 text-slate-700 ring-1 ring-inset ring-slate-200">
                                {{ $evento->status }}
                            </span>
                        </td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $evento->inscricoes_count }}</td>
                        <td class="px-3 py-2.5">
                            <div class="flex justify-end gap-1.5">
                                <a
                                    href="{{ route('secretaria.eventos.edit', $evento) }}"
                                    class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                >
                                    Alterar
                                </a>

                                @if ($evento->inscricoes_count === 0)
                                    <form method="POST" action="{{ route('secretaria.eventos.destroy', $evento) }}"
                                          onsubmit="return confirm('Deseja realmente excluir este evento?');">
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
                                    <button
                                        type="button"
                                        disabled
                                        title="Não é possível excluir eventos com inscrições."
                                        class="inline-flex cursor-not-allowed rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-400 opacity-70"
                                    >
                                        Excluir
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-4 py-8 text-center text-sm text-slate-500">
                            Nenhum evento cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection