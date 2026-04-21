@extends('layouts.secretaria')

@section('title', 'Secretaria | Editar evento')
@section('page-title', 'Editar evento')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6 flex items-start justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-slate-900">{{ $evento->nome }}</h2>
                <p class="mt-1 text-sm text-slate-600">
                    Atualize os dados do evento.
                </p>
            </div>

            <span class="inline-flex rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-100">
                Inscritos: {{ $evento->inscricoes_count ?? 0 }}
            </span>
        </div>

        <form method="POST" action="{{ route('secretaria.eventos.update', $evento) }}">
            @csrf
            @method('PUT')

            @include('secretaria.eventos._form')
        </form>
    </section>
@endsection