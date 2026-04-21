@extends('layouts.secretaria')

@section('title', 'Secretaria | Editar usuário')
@section('page-title', 'Editar usuário')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">{{ $user->name }}</h2>
            <p class="mt-1 text-sm text-slate-600">
                Atualize os dados do usuário e seus papéis.
            </p>
        </div>

        <form method="POST" action="{{ route('secretaria.users.update', $user) }}">
            @csrf
            @method('PUT')
            @include('secretaria.users._form')
        </form>
    </section>
@endsection