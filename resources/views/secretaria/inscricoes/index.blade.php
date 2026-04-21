@extends('layouts.secretaria')

@section('title', 'Secretaria | Inscrições')
@section('page-title', $evento ? 'Inscrições do evento' : 'Inscrições')

@section('content')
    <div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900">
                {{ $evento ? $evento->nome : 'Lista de inscrições' }}
            </h2>
            <p class="mt-1 text-sm text-slate-600">
                {{ $evento ? 'Gerencie as inscrições vinculadas a este evento.' : 'Consulte as inscrições administrativas do sistema.' }}
            </p>
        </div>

        @if ($evento)
            <a
                href="{{ route('secretaria.eventos.inscricoes.create', $evento) }}"
                class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
            >
                Incluir inscrição
            </a>
        @endif
    </div>

    <form method="GET" class="mb-4 flex flex-col gap-2 sm:flex-row sm:items-center">
        <input
            type="text"
            name="q"
            value="{{ $q }}"
            placeholder="Buscar por nome, CPF, e-mail ou telefone"
            class="w-full min-w-[260px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800"
        >

        @unless ($evento)
            <select name="evento_id" class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800">
                <option value="">Todos os eventos</option>
                @foreach ($eventos as $eventoOption)
                    <option value="{{ $eventoOption->id }}" @selected((string) $eventoId === (string) $eventoOption->id)>
                        {{ $eventoOption->numero }} - {{ $eventoOption->nome }}
                    </option>
                @endforeach
            </select>
        @endunless

        <select name="status" class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800">
            <option value="">Todos os status</option>
            @foreach ($statusDisponiveis as $statusItem)
                <option value="{{ $statusItem }}" @selected($status === $statusItem)>
                    {{ $statusItem }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700">
            Buscar
        </button>

        @if (filled($q) || filled($eventoId) || filled($status))
            <a
                href="{{ $evento ? route('secretaria.eventos.inscricoes.index', $evento) : route('secretaria.inscricoes.index') }}"
                class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700"
            >
                Limpar
            </a>
        @endif
    </form>

    <x-admin.table-shell :paginator="$inscricoes">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Nome</th>
                    <th class="px-3 py-2 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">CPF</th>
                    <th class="px-3 py-2 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Telefone</th>
                    <th class="px-3 py-2 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">E-mail</th>
                    <th class="px-3 py-2 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Status</th>
                    <th class="px-3 py-2 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Pagamento</th>
                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Ações</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($inscricoes as $inscricao)
                    <tr>
                        <td class="px-3 py-2.5 font-semibold text-slate-900">{{ $inscricao->nome }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $inscricao->cpf }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $inscricao->telefone }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $inscricao->email }}</td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $inscricao->status_ficha }}</td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">
                            {{ $inscricao->pagamento_confirmado ? 'Confirmado' : 'Pendente' }}
                        </td>
                        <td class="px-3 py-2.5">
                            <div class="flex justify-end">
                                @if ($evento)
                                    <a
                                        href="{{ route('secretaria.eventos.inscricoes.edit', [$evento, $inscricao]) }}"
                                        class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>
                                @elseif ($inscricao->evento)
                                    <a
                                        href="{{ route('secretaria.eventos.inscricoes.edit', [$inscricao->evento, $inscricao]) }}"
                                        class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-8 text-center text-sm text-slate-500">
                            Nenhuma inscrição encontrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection