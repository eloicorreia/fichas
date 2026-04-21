@extends('layouts.secretaria')

@section('title', 'Secretaria | Editar permissão')
@section('page-title', 'Editar permissão')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">{{ $permission->label }}</h2>
            <p class="mt-1 text-sm text-slate-600">Atualize os dados da permissão.</p>
        </div>

        <form method="POST" action="{{ route('secretaria.permissions.update', $permission) }}">
            @csrf
            @method('PUT')
            @include('secretaria.permissions._form')
        </form>
    </section>
@endsection