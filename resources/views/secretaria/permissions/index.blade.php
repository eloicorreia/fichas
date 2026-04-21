@extends('layouts.secretaria')

@section('title', 'Secretaria | Permissões')
@section('page-title', 'Permissões')

@section('content')
    <section class="mb-6 flex items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Lista de permissões</h2>
            <p class="mt-1 text-sm text-slate-600">Cadastre e mantenha as permissões do sistema.</p>
        </div>

        <a href="{{ route('secretaria.permissions.create') }}"
           class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800">
            Incluir permissão
        </a>
    </section>

    <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Nome</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Rótulo</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Módulo</th>
                        <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Papéis</th>
                        <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Status</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($permissions as $permission)
                        <tr>
                            <td class="px-4 py-4 font-semibold text-slate-900">{{ $permission->name }}</td>
                            <td class="px-4 py-4 text-sm text-slate-700">{{ $permission->label }}</td>
                            <td class="px-4 py-4 text-sm text-slate-700">{{ $permission->module }}</td>
                            <td class="px-4 py-4 text-center text-sm text-slate-700">{{ $permission->roles_count }}</td>
                            <td class="px-4 py-4 text-center">
                                <span class="inline-flex rounded-full px-3 py-1 text-xs font-semibold {{ $permission->active ? 'bg-emerald-50 text-emerald-700 ring-1 ring-inset ring-emerald-100' : 'bg-slate-100 text-slate-600 ring-1 ring-inset ring-slate-200' }}">
                                    {{ $permission->active ? 'Ativa' : 'Inativa' }}
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('secretaria.permissions.edit', $permission) }}"
                                       class="inline-flex rounded-xl border border-slate-200 px-3 py-2 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50">
                                        Alterar
                                    </a>
                                    <form method="POST" action="{{ route('secretaria.permissions.destroy', $permission) }}"
                                          onsubmit="return confirm('Deseja realmente excluir esta permissão?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex rounded-xl border border-rose-200 px-3 py-2 text-sm font-medium text-rose-700 transition hover:bg-rose-50">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-10 text-center text-sm text-slate-500">
                                Nenhuma permissão cadastrada.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="border-t border-slate-100 px-4 py-4">
            {{ $permissions->links() }}
        </div>
    </section>
@endsection