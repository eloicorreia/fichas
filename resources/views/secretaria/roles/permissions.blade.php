@extends('layouts.secretaria')

@section('title', 'Secretaria | Permissões do papel')
@section('page-title', 'Permissões do papel')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">{{ $role->label }}</h2>
            <p class="mt-1 text-sm text-slate-600">Selecione as permissões que este papel deve possuir.</p>
        </div>

        <form method="POST" action="{{ route('secretaria.roles.permissions.update', $role) }}">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                @foreach ($permissions as $module => $items)
                    <div class="rounded-2xl border border-slate-200 p-4">
                        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">
                            {{ $module ?: 'Geral' }}
                        </h3>

                        <div class="mt-4 grid gap-3 md:grid-cols-2">
                            @foreach ($items as $permission)
                                <label class="flex items-start gap-3 rounded-xl border border-slate-100 px-4 py-3">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                        @checked(in_array($permission->id, $selectedPermissions, true))
                                        class="mt-1 h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500">

                                    <div>
                                        <div class="text-sm font-semibold text-slate-800">{{ $permission->label }}</div>
                                        <div class="text-xs text-slate-500">{{ $permission->name }}</div>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex items-center justify-end gap-3">
                <a href="{{ route('secretaria.roles.index') }}"
                   class="inline-flex items-center rounded-2xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                    Cancelar
                </a>

                <button type="submit"
                    class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800">
                    Salvar permissões
                </button>
            </div>
        </form>
    </section>
@endsection