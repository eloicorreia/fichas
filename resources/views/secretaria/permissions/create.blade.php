@extends('layouts.secretaria')

@section('title', 'Secretaria | Nova permissão')
@section('page-title', 'Nova permissão')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">Cadastrar permissão</h2>
            <p class="mt-1 text-sm text-slate-600">Preencha os dados para criar uma nova permissão.</p>
        </div>

        <form method="POST" action="{{ route('secretaria.permissions.store') }}">
            @include('secretaria.permissions._form')
        </form>
    </section>
@endsection