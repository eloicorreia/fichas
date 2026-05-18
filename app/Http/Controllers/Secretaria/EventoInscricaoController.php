<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreEventoInscricaoRequest;
use App\Http\Requests\Secretaria\UpdateEventoInscricaoRequest;
use App\Models\Evento;
use App\Models\InscricaoCursilho;
use App\Services\Secretaria\EventoInscricaoService;
use App\Services\Secretaria\InscricaoExportService;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Throwable;

class EventoInscricaoController extends Controller
{
    public function index(): View
    {
        $filters = $this->resolveFilters();

        $inscricoes = $this->buildBaseQuery($filters)
            ->paginate(20)
            ->withQueryString();

        return view('secretaria.inscricoes.index', [
            'inscricoes' => $inscricoes,
            'evento' => null,
            'eventos' => Evento::query()
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

    public function indexByEvento(Evento $evento): View
    {
        $filters = $this->resolveFilters();
        $filters['eventoId'] = (string) $evento->id;

        $inscricoes = $this->buildBaseQuery($filters)
            ->where('inscricoes_cursilho.evento_id', $evento->id)
            ->paginate(20)
            ->withQueryString();

        return view('secretaria.inscricoes.index', [
            'inscricoes' => $inscricoes,
            'evento' => $evento,
            'eventos' => collect(),
            'q' => $filters['q'],
            'eventoId' => (string) $evento->id,
            'status' => $filters['status'],
            'pagamento' => $filters['pagamento'],
            'sort' => $filters['sort'],
            'dir' => $filters['dir'],
            'statusDisponiveis' => InscricaoCursilho::getStatusDisponiveis(),
        ]);
    }

    public function export(InscricaoExportService $exportService): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $filters = $this->resolveFilters();

        $inscricoes = $this->buildBaseQuery($filters)
            ->get();

        return $exportService->download(
            $inscricoes,
            'inscricoes_' . now()->format('Ymd_His') . '.csv'
        );
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
     * @param array<string, string> $filters
     */
    private function buildBaseQuery(array $filters): Builder
    {
        $sortMap = [
            'nome' => 'inscricoes_cursilho.nome',
            'cpf' => 'inscricoes_cursilho.cpf',
            'telefone' => 'inscricoes_cursilho.telefone',
            'email' => 'inscricoes_cursilho.email',
            'evento' => 'eventos.nome',
            'status_ficha' => 'inscricoes_cursilho.status_ficha',
            'pagamento_confirmado' => 'inscricoes_cursilho.pagamento_confirmado',
        ];

        $sortColumn = $sortMap[$filters['sort']] ?? 'inscricoes_cursilho.id';

        return InscricaoCursilho::query()
            ->select('inscricoes_cursilho.*')
            ->with('evento:id,nome,numero')
            ->leftJoin('eventos', 'eventos.id', '=', 'inscricoes_cursilho.evento_id')
            ->when($filters['q'] !== '', function ($query) use ($filters): void {
                $query->where(function ($subQuery) use ($filters): void {
                    $subQuery->where('inscricoes_cursilho.nome', 'like', '%' . $filters['q'] . '%')
                        ->orWhere('inscricoes_cursilho.cpf', 'like', '%' . $filters['q'] . '%')
                        ->orWhere('inscricoes_cursilho.email', 'like', '%' . $filters['q'] . '%')
                        ->orWhere('inscricoes_cursilho.telefone', 'like', '%' . $filters['q'] . '%');
                });
            })
            ->when($filters['eventoId'] !== '', function ($query) use ($filters): void {
                $query->where('inscricoes_cursilho.evento_id', $filters['eventoId']);
            })
            ->when($filters['status'] !== '', function ($query) use ($filters): void {
                $query->where('inscricoes_cursilho.status_ficha', $filters['status']);
            })
            ->when($filters['pagamento'] !== '', function ($query) use ($filters): void {
                $query->where(
                    'inscricoes_cursilho.pagamento_confirmado',
                    $filters['pagamento'] === 'confirmado'
                );
            })
            ->orderBy($sortColumn, $filters['dir'])
            ->orderByDesc('inscricoes_cursilho.id');
    }

    /**
     * @return array<string, string>
     */
    private function resolveFilters(): array
    {
        $sort = (string) request('sort', 'nome');
        $dir = strtolower((string) request('dir', 'asc')) === 'desc' ? 'desc' : 'asc';

        $allowedSorts = [
            'nome',
            'cpf',
            'telefone',
            'email',
            'evento',
            'status_ficha',
            'pagamento_confirmado',
        ];

        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'nome';
        }

        return [
            'q' => trim((string) request('q', '')),
            'eventoId' => trim((string) request('evento_id', '')),
            'status' => trim((string) request('status', '')),
            'pagamento' => trim((string) request('pagamento', '')),
            'sort' => $sort,
            'dir' => $dir,
        ];
    }
}