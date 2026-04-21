@extends('layouts.secretaria')

@section('title', 'Secretaria | Papéis')
@section('page-title', 'Papéis')

@section('content')
    <x-admin.index-toolbar
        :action="route('secretaria.roles.index')"
        :q="$q ?? ''"
        :status="$status ?? ''"
        :show-status="true"
        :create-url="route('secretaria.roles.create')"
        create-label="Incluir papel"
        placeholder="Buscar por nome ou rótulo"
    >
        <x-slot:title>
            <h2 class="text-lg font-bold text-slate-900">Lista de papéis</h2>
            <p class="mt-1 text-sm text-slate-600">
                Cadastre e mantenha os papéis do controle de acesso.
            </p>
        </x-slot:title>
    </x-admin.index-toolbar>

    <x-admin.table-shell :paginator="$roles">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Nome" column="name" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Rótulo" column="label" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Status" column="active" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Usuários" column="users_count" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Permissões" column="permissions_count" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Ações
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($roles as $role)
                    <tr>
                        <td class="px-3 py-2.5 font-semibold text-slate-900">{{ $role->name }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $role->label }}</td>
                        <td class="px-3 py-2.5 text-center">
                            <span class="inline-flex rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $role->active ? 'bg-emerald-50 text-emerald-700 ring-1 ring-inset ring-emerald-100' : 'bg-slate-100 text-slate-600 ring-1 ring-inset ring-slate-200' }}">
                                {{ $role->active ? 'Ativo' : 'Inativo' }}
                            </span>
                        </td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $role->users_count }}</td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $role->permissions_count }}</td>
                        <td class="px-3 py-2.5">
                            <div class="flex justify-end gap-1.5">
                                @if (\Illuminate\Support\Facades\Route::has('secretaria.roles.permissions.edit'))
                                    <a
                                        href="{{ route('secretaria.roles.permissions.edit', $role) }}"
                                        class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                    >
                                        Permissões
                                    </a>
                                @endif

                                <a
                                    href="{{ route('secretaria.roles.edit', $role) }}"
                                    class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                >
                                    Alterar
                                </a>

                                <form method="POST" action="{{ route('secretaria.roles.destroy', $role) }}"
                                      onsubmit="return confirm('Deseja realmente excluir este papel?');">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        class="inline-flex rounded-lg border border-rose-200 px-2.5 py-1.5 text-xs font-medium text-rose-700 transition hover:bg-rose-50"
                                    >
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-sm text-slate-500">
                            Nenhum papel cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection