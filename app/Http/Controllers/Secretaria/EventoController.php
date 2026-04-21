<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreEventoRequest;
use App\Http\Requests\Secretaria\UpdateEventoRequest;
use App\Models\Evento;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class EventoController extends Controller
{
    public function index(): View
    {
        $eventos = Evento::query()
            ->withCount('inscricoes')
            ->orderByDesc('inicio_em')
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();

        return view('secretaria.eventos.index', [
            'eventos' => $eventos,
        ]);
    }

    public function create(): View
    {
        return view('secretaria.eventos.create', [
            'evento' => new Evento(),
            'tiposEvento' => Evento::getTiposEvento(),
            'publicosEvento' => Evento::getPublicosEvento(),
            'statusDisponiveis' => Evento::getStatusDisponiveis(),
        ]);
    }

    public function store(StoreEventoRequest $request): RedirectResponse
    {
        try {
            $evento = DB::transaction(function () use ($request): Evento {
                return Evento::create($request->validated());
            });

            Log::info('Evento criado com sucesso.', [
                'evento_id' => $evento->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.index')
                ->with('status', 'Evento criado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao criar evento.', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function edit(Evento $evento): View
    {
        $evento->loadCount('inscricoes');

        return view('secretaria.eventos.edit', [
            'evento' => $evento,
            'tiposEvento' => Evento::getTiposEvento(),
            'publicosEvento' => Evento::getPublicosEvento(),
            'statusDisponiveis' => Evento::getStatusDisponiveis(),
        ]);
    }

    public function update(UpdateEventoRequest $request, Evento $evento): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $evento): void {
                $evento->update($request->validated());
            });

            Log::info('Evento atualizado com sucesso.', [
                'evento_id' => $evento->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.index')
                ->with('status', 'Evento atualizado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar evento.', [
                'evento_id' => $evento->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function destroy(Evento $evento): RedirectResponse
    {
        $evento->loadCount('inscricoes');

        if ($evento->inscricoes_count > 0) {
            return redirect()
                ->route('secretaria.eventos.index')
                ->with('status', 'O evento não pode ser excluído porque possui inscrições vinculadas.');
        }

        try {
            DB::transaction(function () use ($evento): void {
                $evento->delete();
            });

            Log::info('Evento excluído com sucesso.', [
                'evento_id' => $evento->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.index')
                ->with('status', 'Evento excluído com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao excluir evento.', [
                'evento_id' => $evento->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}