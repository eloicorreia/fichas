@extends('layouts.secretaria')

@section('title', 'Secretaria | Novo usuário')
@section('page-title', 'Novo usuário')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">Cadastrar usuário</h2>
            <p class="mt-1 text-sm text-slate-600">
                Preencha os dados para criar um novo usuário do sistema.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.users.store') }}">
            @include('secretaria.users._form')
        </form>
    </section>
@endsection