@extends('layouts.secretaria')

@section('title', 'Secretaria | Inscrições')
@section('page-title', $evento ? 'Inscrições do evento' : 'Inscrições')

@php
    $search = request('search', '');
    $sort = request('sort', 'id');
    $direction = request('direction', 'desc');

    function sort_direction($column, $sort, $direction) {
        if ($sort !== $column) {
            return 'asc';
        }

        return $direction === 'asc' ? 'desc' : 'asc';
    }

    function sort_icon($column, $sort, $direction) {
        if ($sort !== $column) {
            return '↕';
        }

        return $direction === 'asc' ? '↑' : '↓';
    }
@endphp

@section('content')
<div class="container-fluid px-3">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
                <div>
                    <h1 class="h4 mb-1">Inscrições</h1>
                    <p class="text-muted mb-0">Gerencie as inscrições dos eventos.</p>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-2">
                    @can('inscricao.create')
                        <a href="{{ route('secretaria.inscricoes.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i>
                            Nova inscrição
                        </a>
                    @endcan
                </div>
            </div>
        </div>

        <div class="card-body py-3">
            @if(session('success'))
                <div class="alert alert-success py-2 px-3 mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger py-2 px-3 mb-3">
                    {{ session('error') }}
                </div>
            @endif

            <form method="GET" action="{{ route('secretaria.inscricoes.index') }}" class="mb-3">
                <div class="row g-2 align-items-end">
                    <div class="col-12 col-md-6 col-lg-5">
                        <label for="search" class="form-label mb-1 fw-semibold">Buscar</label>
                        <input
                            type="text"
                            name="search"
                            id="search"
                            class="form-control form-control-sm"
                            value="{{ $search }}"
                            placeholder="Pesquisar por nome, email, telefone ou evento">
                    </div>

                    <div class="col-12 col-md-auto">
                        <button type="submit" class="btn btn-sm btn-primary w-100">
                            <i class="bi bi-search me-1"></i>
                            Pesquisar
                        </button>
                    </div>

                    <div class="col-12 col-md-auto">
                        <a href="{{ route('secretaria.inscricoes.index') }}" class="btn btn-sm btn-outline-secondary w-100">
                            <i class="bi bi-x-circle me-1"></i>
                            Limpar
                        </a>
                    </div>
                </div>

                <input type="hidden" name="sort" value="{{ $sort }}">
                <input type="hidden" name="direction" value="{{ $direction }}">
            </form>

            <div class="table-responsive">
                <table class="table table-hover table-striped table-sm align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-nowrap">
                                <a
                                    href="{{ route('secretaria.inscricoes.index', array_merge(request()->query(), ['sort' => 'id', 'direction' => sort_direction('id', $sort, $direction)])) }}"
                                    class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    ID
                                    <span>{{ sort_icon('id', $sort, $direction) }}</span>
                                </a>
                            </th>

                            <th class="text-nowrap">
                                <a
                                    href="{{ route('secretaria.inscricoes.index', array_merge(request()->query(), ['sort' => 'evento', 'direction' => sort_direction('evento', $sort, $direction)])) }}"
                                    class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    Evento
                                    <span>{{ sort_icon('evento', $sort, $direction) }}</span>
                                </a>
                            </th>

                            <th class="text-nowrap">
                                <a
                                    href="{{ route('secretaria.inscricoes.index', array_merge(request()->query(), ['sort' => 'nome', 'direction' => sort_direction('nome', $sort, $direction)])) }}"
                                    class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    Nome
                                    <span>{{ sort_icon('nome', $sort, $direction) }}</span>
                                </a>
                            </th>

                            <th class="text-nowrap">
                                <a
                                    href="{{ route('secretaria.inscricoes.index', array_merge(request()->query(), ['sort' => 'email', 'direction' => sort_direction('email', $sort, $direction)])) }}"
                                    class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    E-mail
                                    <span>{{ sort_icon('email', $sort, $direction) }}</span>
                                </a>
                            </th>

                            <th class="text-nowrap">
                                <a
                                    href="{{ route('secretaria.inscricoes.index', array_merge(request()->query(), ['sort' => 'telefone', 'direction' => sort_direction('telefone', $sort, $direction)])) }}"
                                    class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    Telefone
                                    <span>{{ sort_icon('telefone', $sort, $direction) }}</span>
                                </a>
                            </th>

                            <th class="text-nowrap text-center" style="width: 180px;">
                                Ações
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($inscricoes as $inscricao)
                            <tr>
                                <td class="text-nowrap">{{ $inscricao->id }}</td>

                                <td>
                                    {{ $inscricao->evento->nome ?? '-' }}
                                </td>

                                <td>
                                    {{ $inscricao->nome ?? '-' }}
                                </td>

                                <td>
                                    {{ $inscricao->email ?? '-' }}
                                </td>

                                <td class="text-nowrap">
                                    {{ $inscricao->telefone ?? '-' }}
                                </td>

                                <td class="text-center text-nowrap">
                                    <div class="d-inline-flex gap-1">
                                        @can('inscricao.view')
                                            <a
                                                href="{{ route('secretaria.inscricoes.show', $inscricao->id) }}"
                                                class="btn btn-sm btn-outline-secondary"
                                                title="Visualizar">
                                                Ver
                                            </a>
                                        @endcan

                                        @can('inscricao.update')
                                            <a
                                                href="{{ route('secretaria.inscricoes.edit', $inscricao->id) }}"
                                                class="btn btn-sm btn-outline-primary"
                                                title="Editar">
                                                Editar
                                            </a>
                                        @endcan

                                        @can('inscricao.delete')
                                            <form
                                                action="{{ route('secretaria.inscricoes.destroy', $inscricao->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Deseja realmente excluir esta inscrição?');">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="Excluir">
                                                    Excluir
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    Nenhuma inscrição encontrada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if(method_exists($inscricoes, 'hasPages'))
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mt-3">
                    <div class="text-muted small">
                        Mostrando
                        <strong>{{ $inscricoes->firstItem() ?? 0 }}</strong>
                        até
                        <strong>{{ $inscricoes->lastItem() ?? 0 }}</strong>
                        de
                        <strong>{{ $inscricoes->total() }}</strong>
                        registros
                    </div>

                    <div>
                        {{ $inscricoes->appends(request()->query())->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .table > :not(caption) > * > * {
        padding-top: 0.55rem;
        padding-bottom: 0.55rem;
        vertical-align: middle;
    }

    .card-header h1 {
        line-height: 1.2;
    }

    .table thead th a {
        font-size: 0.92rem;
    }

    .table tbody td,
    .table thead th {
        white-space: nowrap;
    }

    .table tbody td:nth-child(2),
    .table tbody td:nth-child(3),
    .table tbody td:nth-child(4) {
        white-space: normal;
    }

    .pagination {
        margin-bottom: 0;
    }
</style>
@endpush