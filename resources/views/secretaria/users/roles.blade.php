@extends('layouts.secretaria')

@section('title', 'Secretaria | Papéis do usuário')
@section('page-title', 'Papéis do usuário')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">{{ $user->name }}</h2>
            <p class="mt-1 text-sm text-slate-600">
                Associe os papéis que este usuário deve possuir.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.users.roles.update', $user) }}">
            @csrf
            @method('PUT')

            <div class="grid gap-3 md:grid-cols-2">
                @foreach ($roles as $role)
                    <label class="flex items-start gap-3 rounded-xl border border-slate-100 px-4 py-3">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                            @checked(in_array($role->id, $selectedRoles, true))
                            class="mt-1 h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500">

                        <div>
                            <div class="text-sm font-semibold text-slate-800">{{ $role->label }}</div>
                            <div class="text-xs text-slate-500">{{ $role->name }}</div>
                        </div>
                    </label>
                @endforeach
            </div>

            <div class="mt-8 flex items-center justify-end gap-3">
                <a href="{{ route('secretaria.users.index') }}"
                   class="inline-flex items-center rounded-2xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                    Cancelar
                </a>

                <button type="submit"
                    class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800">
                    Salvar papéis
                </button>
            </div>
        </form>
    </section>
@endsection