@extends('layouts.secretaria')

@section('title', 'Secretaria | Editar papel')
@section('page-title', 'Editar papel')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6 flex items-start justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-slate-900">{{ $role->label }}</h2>
                <p class="mt-1 text-sm text-slate-600">
                    Atualize os dados do papel.
                </p>
            </div>

            <span class="inline-flex rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                Usuários: {{ $role->users_count ?? 0 }}
            </span>
        </div>

        <form method="POST" action="{{ route('secretaria.roles.update', $role) }}">
            @csrf
            @method('PUT')

            @include('secretaria.roles._form')
        </form>
    </section>
@endsection