<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreEventoRequest;
use App\Http\Requests\Secretaria\UpdateEventoRequest;
use App\Models\Evento;
use App\Services\Support\HtmlSanitizerService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class EventoController extends Controller
{
    public function index(): View
    {
        $q = trim((string) request('q', ''));
        $status = trim((string) request('status', ''));
        $sort = (string) request('sort', 'inicio_em');
        $dir = strtolower((string) request('dir', 'desc')) === 'asc' ? 'asc' : 'desc';

        $allowedSorts = [
            'nome',
            'tipo_evento',
            'publico_evento',
            'numero',
            'inicio_em',
            'status',
            'ativo',
            'inscricoes_count',
        ];

        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'inicio_em';
        }

        $eventos = Evento::query()
            ->withCount('inscricoes')
            ->when($q !== '', function ($query) use ($q): void {
                $query->where(function ($subQuery) use ($q): void {
                    $subQuery->where('nome', 'like', "%{$q}%")
                        ->orWhere('tipo_evento', 'like', "%{$q}%")
                        ->orWhere('publico_evento', 'like', "%{$q}%")
                        ->orWhere('numero', 'like', "%{$q}%")
                        ->orWhere('coordenador_nome', 'like', "%{$q}%")
                        ->orWhere('tesoureiro_nome', 'like', "%{$q}%")
                        ->orWhere('cidade', 'like', "%{$q}%");
                });
            })
            ->when($status !== '', function ($query) use ($status): void {
                $query->where('status', $status);
            })
            ->orderBy($sort, $dir)
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();

        return view('secretaria.eventos.index', [
            'eventos' => $eventos,
            'q' => $q,
            'status' => $status,
            'sort' => $sort,
            'dir' => $dir,
            'statusDisponiveis' => Evento::getStatusDisponiveis(),
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

    public function store(
        StoreEventoRequest $request,
        HtmlSanitizerService $htmlSanitizerService
    ): RedirectResponse {
        try {
            $data = $this->sanitizeHtmlFields(
                $request->validated(),
                $htmlSanitizerService
            );

            $evento = DB::transaction(function () use ($data): Evento {
                return Evento::create($data);
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

    public function update(
        UpdateEventoRequest $request,
        Evento $evento,
        HtmlSanitizerService $htmlSanitizerService
    ): RedirectResponse {
        try {
            $data = $this->sanitizeHtmlFields(
                $request->validated(),
                $htmlSanitizerService
            );

            DB::transaction(function () use ($data, $evento): void {
                $evento->update($data);
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

    /**
     * Sanitiza os campos HTML do evento antes de persistir.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function sanitizeHtmlFields(
        array $data,
        HtmlSanitizerService $htmlSanitizerService
    ): array {
        $htmlFields = [
            'orientacoes_participante',
            'encerramento_info',
            'informacoes_finais',
            'observacoes_internas',
        ];

        foreach ($htmlFields as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = $htmlSanitizerService->sanitize(
                    is_string($data[$field]) ? $data[$field] : null
                );
            }
        }

        return $data;
    }
}