@extends('layouts.secretaria')

@section('title', 'Secretaria | Papéis')
@section('page-title', 'Papéis')

@section('content')
    <section class="mb-6 flex items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Lista de papéis</h2>
            <p class="mt-1 text-sm text-slate-600">
                Cadastre e mantenha os papéis utilizados no controle de acesso.
            </p>
        </div>

        <a
            href="{{ route('secretaria.roles.create') }}"
            class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800"
        >
            Incluir papel
        </a>
    </section>

    <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Nome interno
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Rótulo
                        </th>
                        <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Status
                        </th>
                        <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Usuários
                        </th>
                        <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                            Ações
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @forelse ($roles as $role)
                        <tr class="align-top">
                            <td class="px-4 py-4">
                                <div class="font-semibold text-slate-900">{{ $role->name }}</div>
                            </td>

                            <td class="px-4 py-4 text-sm text-slate-700">
                                {{ $role->label }}
                            </td>

                            <td class="px-4 py-4 text-center">
                                @if ($role->active)
                                    <span class="inline-flex rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-100">
                                        Ativo
                                    </span>
                                @else
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600 ring-1 ring-inset ring-slate-200">
                                        Inativo
                                    </span>
                                @endif
                            </td>

                            <td class="px-4 py-4 text-center">
                                <span class="inline-flex rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                                    {{ $role->users_count }}
                                </span>
                            </td>

                            <td class="px-4 py-4">
                                <div class="flex justify-end gap-2">
                                    <a
                                        href="{{ route('secretaria.roles.edit', $role) }}"
                                        class="inline-flex rounded-xl border border-slate-200 px-3 py-2 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Alterar
                                    </a>

                                    @if ($role->users_count === 0)
                                        <form
                                            action="{{ route('secretaria.roles.destroy', $role) }}"
                                            method="POST"
                                            onsubmit="return confirm('Deseja realmente excluir este papel?');"
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
                                            title="Não é possível excluir papéis com usuários vinculados."
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
                            <td colspan="5" class="px-4 py-10 text-center text-sm text-slate-500">
                                Nenhum papel cadastrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="border-t border-slate-100 px-4 py-4">
            {{ $roles->links() }}
        </div>
    </section>
@endsection