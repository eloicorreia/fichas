@extends('layouts.secretaria')

@section('title', 'Secretaria | Usuários')
@section('page-title', 'Usuários')

@section('content')
    <section class="mb-6">
        <h2 class="text-xl font-bold text-slate-900">Usuários</h2>
        <p class="mt-1 text-sm text-slate-600">
            Associe papéis aos usuários do sistema.
        </p>
    </section>

    <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Nome</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">E-mail</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Papéis</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-4 py-4 font-semibold text-slate-900">{{ $user->name }}</td>
                            <td class="px-4 py-4 text-sm text-slate-700">{{ $user->email }}</td>
                            <td class="px-4 py-4">
                                <div class="flex flex-wrap gap-2">
                                    @forelse ($user->roles as $role)
                                        <span class="inline-flex rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                                            {{ $role->label }}
                                        </span>
                                    @empty
                                        <span class="text-sm text-slate-500">Sem papéis</span>
                                    @endforelse
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex justify-end">
                                    <a href="{{ route('secretaria.users.roles.edit', $user) }}"
                                       class="inline-flex rounded-xl border border-slate-200 px-3 py-2 text-sm font-medium text-slate-700 transition hover:border-sky-300 hover:bg-sky-50">
                                        Editar papéis
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-10 text-center text-sm text-slate-500">
                                Nenhum usuário encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="border-t border-slate-100 px-4 py-4">
            {{ $users->links() }}
        </div>
    </section>
@endsection