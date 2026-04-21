@extends('layouts.secretaria')

@section('title', 'Secretaria | Usuários')
@section('page-title', 'Usuários')

@section('content')
    <div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900">Usuários</h2>
            <p class="mt-1 text-sm text-slate-600">
                Cadastre usuários e associe papéis de acesso.
            </p>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <form method="GET" action="{{ route('secretaria.users.index') }}" class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <input
                    type="text"
                    name="q"
                    value="{{ $q ?? '' }}"
                    placeholder="Buscar por nome ou e-mail"
                    class="w-full min-w-[260px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >

                <select
                    name="role"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os papéis</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @selected((string) $roleId === (string) $role->id)>
                            {{ $role->label }}
                        </option>
                    @endforeach
                </select>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                >
                    Buscar
                </button>

                @if (filled($q) || filled($roleId))
                    <a
                        href="{{ route('secretaria.users.index') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >
                        Limpar
                    </a>
                @endif
            </form>

            <a
                href="{{ route('secretaria.users.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
            >
                Incluir usuário
            </a>
        </div>
    </div>

    <x-admin.table-shell :paginator="$users">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="Nome" column="name" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left">
                        <x-admin.sort-link label="E-mail" column="email" :sort="$sort" :dir="$dir" />
                    </th>
                    <th class="px-3 py-2 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Papéis
                    </th>
                    <th class="px-3 py-2 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">
                        Ações
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($users as $user)
                    <tr>
                        <td class="px-3 py-2.5 font-semibold text-slate-900">{{ $user->name }}</td>
                        <td class="px-3 py-2.5 text-sm text-slate-700">{{ $user->email }}</td>
                        <td class="px-3 py-2.5">
                            <div class="flex flex-wrap gap-1.5">
                                @forelse ($user->roles as $role)
                                    <span class="inline-flex rounded-full bg-sky-50 px-2.5 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                                        {{ $role->label }}
                                    </span>
                                @empty
                                    <span class="text-sm text-slate-500">Sem papéis</span>
                                @endforelse
                            </div>
                        </td>
                        <td class="px-3 py-2.5">
                            <div class="flex justify-end gap-1.5">
                                <a
                                    href="{{ route('secretaria.users.edit', $user) }}"
                                    class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                >
                                    Alterar
                                </a>

                                <a
                                    href="{{ route('secretaria.users.roles.edit', $user) }}"
                                    class="inline-flex rounded-lg border border-slate-200 px-2.5 py-1.5 text-xs font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50"
                                >
                                    Papéis
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-sm text-slate-500">
                            Nenhum usuário encontrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-admin.table-shell>
@endsection