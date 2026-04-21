@extends('layouts.secretaria')

@section('title', 'Secretaria | Novo papel')
@section('page-title', 'Novo papel')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">Cadastrar papel</h2>
            <p class="mt-1 text-sm text-slate-600">
                Preencha os dados para criar um novo papel de acesso.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.roles.store') }}">
            @include('secretaria.roles._form')
        </form>
    </section>
@endsection