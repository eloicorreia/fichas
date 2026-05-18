<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreEventoInscricaoRequest;
use App\Http\Requests\Secretaria\UpdateEventoInscricaoRequest;
use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Services\Secretaria\EventoInscricaoService;
use App\Services\Secretaria\InscricaoCursilhoQueryService;
use App\Services\Secretaria\InscricaoExportService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Throwable;

class EventoInscricaoController extends Controller
{
    public function index(Request $request, InscricaoCursilhoQueryService $queryService): View
    {
        $filters = $queryService->resolveFilters($request);

        $inscricoes = $queryService->build($filters)
            ->paginate(20)
            ->withQueryString();

        return $this->viewIndex($inscricoes, $filters);
    }

    public function indexByEvento(
        Evento $evento,
        Request $request,
        InscricaoCursilhoQueryService $queryService
    ): View {
        $filters = $queryService->resolveFilters($request);
        $filters['eventoId'] = (string) $evento->id;

        $inscricoes = $queryService->build($filters)
            ->paginate(20)
            ->withQueryString();

        return $this->viewIndex($inscricoes, $filters, $evento);
    }

    public function export(
        Request $request,
        InscricaoCursilhoQueryService $queryService,
        InscricaoExportService $exportService
    ): StreamedResponse {
        $filters = $queryService->resolveFilters($request);

        Log::info('Exportação global de inscrições solicitada.', [
            'user_id' => $request->user()?->id,
            'evento_id' => null,
            'filters' => $filters,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return $exportService->download(
            $queryService->build($filters)->lazy(500),
            'inscricoes_'.now()->format('Ymd_His').'.csv'
        );
    }

    public function exportByEvento(
        Evento $evento,
        Request $request,
        InscricaoCursilhoQueryService $queryService,
        InscricaoExportService $exportService
    ): StreamedResponse {
        $filters = $queryService->resolveFilters($request);
        $filters['eventoId'] = (string) $evento->id;

        Log::info('Exportação de inscrições por evento solicitada.', [
            'user_id' => $request->user()?->id,
            'evento_id' => $evento->id,
            'filters' => $filters,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return $exportService->download(
            $queryService->build($filters)->lazy(500),
            'inscricoes_'.now()->format('Ymd_His').'.csv'
        );
    }

    public function create(Evento $evento): View
    {
        return view('secretaria.inscricoes.create', [
            'evento' => $evento,
            'inscricao' => new InscricaoCursilho,
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

    public function destroy(
        Evento $evento,
        InscricaoCursilho $inscricao,
        EventoInscricaoService $service
    ): RedirectResponse {
        abort_if((int) $inscricao->evento_id !== (int) $evento->id, 404);

        try {
            DB::transaction(function () use ($evento, $inscricao, $service): void {
                $service->deleteForEvento($evento, $inscricao);
            });

            Log::info('Inscrição excluída com sucesso.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
            ]);

            return redirect()
                ->route('secretaria.eventos.inscricoes.index', $evento)
                ->with('status', 'Inscrição excluída com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao excluir inscrição.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    /**
     * @param  array<string, string>  $filters
     */
    private function viewIndex(LengthAwarePaginator $inscricoes, array $filters, ?Evento $evento = null): View
    {
        return view('secretaria.inscricoes.index', [
            'inscricoes' => $inscricoes,
            'evento' => $evento,
            'eventos' => $evento
                ? collect()
                : Evento::query()
                    ->orderByDesc('inicio_em')
                    ->get(['id', 'nome', 'numero']),
            'q' => $filters['q'],
            'eventoId' => $filters['eventoId'],
            'status' => $filters['status'],
            'pagamento' => $filters['pagamento'],
            'sort' => $filters['sort'],
            'dir' => $filters['dir'],
            'statusDisponiveis' => InscricaoCursilho::getStatusDisponiveis(),
        ]);
    }
}
