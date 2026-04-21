@extends('layouts.secretaria')

@section('title', 'Secretaria | Nova inscrição')
@section('page-title', 'Nova inscrição')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">{{ $evento->nome }}</h2>
            <p class="mt-1 text-sm text-slate-600">
                Cadastre uma nova inscrição vinculada a este evento.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.eventos.inscricoes.store', $evento) }}">
            @include('secretaria.inscricoes._form')
        </form>
    </section>
@endsection