@extends('layouts.secretaria')

@section('title', 'Secretaria | Novo evento')
@section('page-title', 'Novo evento')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">Cadastrar evento</h2>
            <p class="mt-1 text-sm text-slate-600">
                Preencha os dados para criar um novo evento.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.eventos.store') }}">
            @include('secretaria.eventos._form')
        </form>
    </section>
@endsection