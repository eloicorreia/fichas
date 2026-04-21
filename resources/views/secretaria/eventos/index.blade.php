@extends('layouts.secretaria')

@section('title', 'Secretaria | Eventos')
@section('page-title', 'Eventos')

@section('content')
    <section class="mb-6 flex items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Lista de eventos</h2>
            <p class="mt-1 text-sm text-slate-600">
                Consulte, altere, exclua e cadastre eventos.
            </p>
        </div>

        <a
            href="{{ route('secretaria.eventos.create') }}"
            class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800"
        >
            Incluir evento
        </a>
    </section>

    <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Evento
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Tipo
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Público
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Número
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Início
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Status
                        </th>
                        <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Inscritos
                        </th>
                        <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Ações
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @forelse ($eventos as $evento)
                        <tr class="align-top">
                            <td class="px-4 py-4">
                                <div class="font-semibold text-slate-900">{{ $evento->nome }}</div>
                                @if ($evento->descricao_publica_curta)
                                    <div class="mt-1 text-sm text-slate-500">
                                        {{ $evento->descricao_publica_curta }}
                                    </div>
                                @endif
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ $evento->tipo_evento }}
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ $evento->publico_evento }}
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ $evento->numero }}
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ optional($evento->inicio_em)?->format('d/m/Y H:i') ?? '-' }}
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ $evento->status }}
                            </td>

                            <td class="px-4 py-4 text-center">
                                <span class="inline-flex rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                                    {{ $evento->inscricoes_count }}
                                </span>
                            </td>

                            <td class="px-4 py-4">
                                <div class="flex justify-end gap-2">
                                    <a
                                        href="{{ route('secretaria.eventos.edit', $evento) }}"
                                        class="inline-flex rounded-xl border border-slate-200 px-3 py-2 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>

                                    @if ($evento->inscricoes_count === 0)
                                        <form
                                            action="{{ route('secretaria.eventos.destroy', $evento) }}"
                                            method="POST"
                                            onsubmit="return confirm('Deseja realmente excluir este evento?');"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex rounded-xl border border-rose-200 px-3 py-2 text-sm font-medium text-rose-700 transition hover:bg-rose-50"
                                            >
                                                Excluir
                                            </button>
                                        </form>
                                    @else
                                        <button
                                            type="button"
                                            disabled
                                            title="Não é possível excluir eventos com inscritos."
                                            class="inline-flex cursor-not-allowed rounded-xl border border-slate-200 px-3 py-2 text-sm font-medium text-slate-400 opacity-70"
                                        >
                                            Excluir
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-10 text-center text-sm text-slate-500">
                                Nenhum evento cadastrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="border-t border-slate-100 px-4 py-4">
            {{ $eventos->links() }}
        </div>
    </section>
@endsection