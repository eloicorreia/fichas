@extends('layouts.secretaria')

@section('title', 'Secretaria | Permissões')
@section('page-title', 'Permissões')

@section('content')
    <div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900">Lista de permissões</h2>
            <p class="mt-1 text-sm text-slate-600">
                Cadastre e mantenha as permissões do sistema.
            </p>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <form method="GET" action="{{ route('secretaria.permissions.index') }}" class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <input
                    type="text"
                    name="q"
                    value="{{ $q ?? '' }}"
                    placeholder="Buscar por nome, rótulo ou módulo"
                    class="w-full min-w-[260px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >

                <select
                    name="module"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os módulos</option>
                    @foreach ($modules as $moduleOption)
                        <option value="{{ $moduleOption }}" @selected((string) $module === (string) $moduleOption)>
                            {{ $moduleOption }}
                        </option>
                    @endforeach
                </select>

                <select
                    name="status"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os status</option>
                    <option value="1" @selected((string) $status === '1')>Ativa</option>
                    <option value="0" @selected((string) $status === '0')>Inativa</option>
                </select>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                >
                    Buscar
                </button>

                @if (filled($q) || filled($module) || (string) $status !== '')
                    <a
                        href="{{ route('secretaria.permissions.index') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >
                        Limpar
                    </a>
                @endif
            </form>

            <a
                href="{{ route('secretaria.permissions.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
            >
                Incluir permissão
            </a>
        </div>
    </div>

    <x-admin.table-shell :paginator="$permissions">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Nome" column="name" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Rótulo" column="label" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Módulo" column="module" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Papéis" column="roles_count" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-center">
                        <x-admin.sort-link label="Status" column="active" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Ações
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($permissions as $permission)
                    <tr>
                        <td class="px-3 py-2.5 font-semibold text-slate-900">{{ $permission->name }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $permission->label }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $permission->module }}</td>
                        <td class="px-3 py-2.5 text-center text-sm text-slate-700">{{ $permission->roles_count }}</td>
                        <td class="px-3 py-2.5 text-center">
                            <span class="inline-flex rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $permission->active ? 'bg-emerald-50 text-emerald-700 ring-1 ring-inset ring-emerald-100' : 'bg-slate-100 text-slate-600 ring-1 ring-inset ring-slate-200' }}">
                                {{ $permission->active ? 'Ativa' : 'Inativa' }}
                            </span>
                        </td>
                        <td class="px-3 py-2.5">
                            <div class="flex justify-end gap-1.5">
                                <a
                                    href="{{ route('secretaria.permissions.edit', $permission) }}"
                                    class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                >
                                    Alterar
                                </a>

                                <form method="POST" action="{{ route('secretaria.permissions.destroy', $permission) }}"
                                      onsubmit="return confirm('Deseja realmente excluir esta permissão?');">
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
                            Nenhuma permissão cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection