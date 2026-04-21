<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreEventoInscricaoRequest;
use App\Http\Requests\Secretaria\UpdateEventoInscricaoRequest;
use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Services\Secretaria\EventoInscricaoService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class EventoInscricaoController extends Controller
{
    public function index()
    {
        $search = request('search');
        $sort = request('sort', 'id');
        $direction = request('direction', 'desc');

        $sortsPermitidos = [
            'id',
            'nome',
            'email',
            'telefone',
            'evento',
        ];

        if (!in_array($sort, $sortsPermitidos, true)) {
            $sort = 'id';
        }

        if (!in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $query = \App\Models\InscricaoCursilho::query()
            ->with('evento');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('telefone', 'like', '%' . $search . '%')
                    ->orWhereHas('evento', function ($eventoQuery) use ($search) {
                        $eventoQuery->where('nome', 'like', '%' . $search . '%');
                    });
            });
        }

        if ($sort === 'evento') {
            $query->leftJoin('eventos', 'eventos.id', '=', 'inscricoes_cursilho.evento_id')
                ->select('inscricoes_cursilho.*')
                ->orderBy('eventos.nome', $direction);
        } else {
            $query->orderBy($sort, $direction);
        }

        $inscricoes = $query->paginate(20)->withQueryString();

        return view('secretaria.inscricoes.index', compact('inscricoes'));
    }

    public function indexByEvento(Evento $evento): View
    {
        $q = trim((string) request('q', ''));
        $status = trim((string) request('status', ''));

        $inscricoes = $evento->inscricoes()
            ->when($q !== '', function ($query) use ($q): void {
                $query->where(function ($subQuery) use ($q): void {
                    $subQuery->where('nome', 'like', "%{$q}%")
                        ->orWhere('cpf', 'like', "%{$q}%")
                        ->orWhere('email', 'like', "%{$q}%")
                        ->orWhere('telefone', 'like', "%{$q}%");
                });
            })
            ->when($status !== '', function ($query) use ($status): void {
                $query->where('status_ficha', $status);
            })
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();

        return view('secretaria.inscricoes.index', [
            'inscricoes' => $inscricoes,
            'evento' => $evento,
            'eventos' => null,
            'q' => $q,
            'eventoId' => $evento->id,
            'status' => $status,
            'statusDisponiveis' => InscricaoCursilho::getStatusDisponiveis(),
        ]);
    }

    public function create(Evento $evento): View
    {
        return view('secretaria.inscricoes.create', [
            'evento' => $evento,
            'inscricao' => new InscricaoCursilho(),
            'statusDisponiveis' => InscricaoCursilho::getStatusDisponiveis(),
        ]);
    }

    public function store(
        Evento $evento,
        StoreEventoInscricaoRequest $request,
        EventoInscricaoService $service
    ): RedirectResponse {
        try {
            DB::transaction(function () use ($evento, $request, $service): void {
                $service->createForEvento($evento, $request->validated());
            });

            Log::info('Inscrição criada com sucesso.', [
                'evento_id' => $evento->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.inscricoes.index', $evento)
                ->with('status', 'Inscrição criada com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao criar inscrição.', [
                'evento_id' => $evento->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function edit(Evento $evento, InscricaoCursilho $inscricao): View
    {
        abort_if((int) $inscricao->evento_id !== (int) $evento->id, 404);

        return view('secretaria.inscricoes.edit', [
            'evento' => $evento,
            'inscricao' => $inscricao,
            'statusDisponiveis' => InscricaoCursilho::getStatusDisponiveis(),
        ]);
    }

    public function update(
        Evento $evento,
        InscricaoCursilho $inscricao,
        UpdateEventoInscricaoRequest $request,
        EventoInscricaoService $service
    ): RedirectResponse {
        abort_if((int) $inscricao->evento_id !== (int) $evento->id, 404);

        try {
            DB::transaction(function () use ($evento, $inscricao, $request, $service): void {
                $service->updateForEvento($evento, $inscricao, $request->validated());
            });

            Log::info('Inscrição atualizada com sucesso.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.inscricoes.index', $evento)
                ->with('status', 'Inscrição atualizada com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar inscrição.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}