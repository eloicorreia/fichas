<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Throwable;

class DashboardController extends Controller
{
    /**
     * Exibe o dashboard da secretaria.
     */
    public function index(): View
    {
        try {
            $agora = now();

            $eventosAbertos = Evento::query()
                ->select([
                    'eventos.id',
                    'eventos.nome',
                    'eventos.tipo_evento',
                    'eventos.inicio_em',
                    'eventos.termino_em',
                    'eventos.aceita_inscricoes_ate',
                    'eventos.status',
                ])
                ->withCount('inscricoes')
                ->where('eventos.ativo', true)
                ->whereNotNull('eventos.inicio_em')
                ->whereRaw(
                    'COALESCE(eventos.aceita_inscricoes_ate, DATE_ADD(eventos.inicio_em, INTERVAL 19 HOUR)) >= ?',
                    [$agora]
                )
                ->orderBy('eventos.inicio_em', 'asc')
                ->get();

            $ultimosTresEventosConcluidos = Evento::query()
                ->select([
                    'eventos.id',
                    'eventos.nome',
                    'eventos.tipo_evento',
                    'eventos.inicio_em',
                    'eventos.termino_em',
                    'eventos.aceita_inscricoes_ate',
                    'eventos.status',
                ])
                ->withCount('inscricoes')
                ->where('eventos.ativo', true)
                ->whereNotNull('eventos.inicio_em')
                ->whereRaw(
                    'COALESCE(eventos.aceita_inscricoes_ate, DATE_ADD(eventos.inicio_em, INTERVAL 19 HOUR)) < ?',
                    [$agora]
                )
                ->orderByRaw(
                    'COALESCE(eventos.aceita_inscricoes_ate, DATE_ADD(eventos.inicio_em, INTERVAL 19 HOUR)) DESC'
                )
                ->limit(3)
                ->get();

            $cards = [
                [
                    'title' => 'Eventos abertos',
                    'value' => $eventosAbertos->count(),
                    'description' => $this->buildDescription(
                        $eventosAbertos,
                        'Nenhum evento aberto no momento.'
                    ),
                    'events' => $this->mapEventosAbertos($eventosAbertos),
                    'action_url' => $this->resolveEventosRoute(),
                    'action_label' => 'Ver eventos',
                ],
                [
                    'title' => 'Últimos 3 eventos concluídos',
                    'value' => null,
                    'show_value' => false,
                    'description' => $this->buildDescription(
                        $ultimosTresEventosConcluidos,
                        'Nenhum evento concluído até o momento.'
                    ),
                    'events' => $this->mapUltimosEventosConcluidos($ultimosTresEventosConcluidos),
                    'action_url' => $this->resolveEventosRoute(),
                    'action_label' => 'Ver eventos',
                ],
            ];

            return view('secretaria.dashboard', [
                'cards' => $cards,
                'eventosAbertos' => $eventosAbertos,
                'ultimosTresEventosConcluidos' => $ultimosTresEventosConcluidos,
            ]);
        } catch (Throwable $exception) {
            Log::error('Erro ao carregar dashboard da secretaria.', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    /**
     * Monta a descrição textual de uma coleção de eventos.
     */
    private function buildDescription(Collection $eventos, string $fallback): string
    {
        if ($eventos->isEmpty()) {
            return $fallback;
        }

        return $eventos
            ->pluck('nome')
            ->filter()
            ->implode(' | ');
    }

    /**
     * Mapeia eventos abertos para exibição com badge de inscrições.
     *
     * @return array<int, array<string, mixed>>
     */
    private function mapEventosAbertos(Collection $eventos): array
    {
        return $eventos
            ->map(static function (Evento $evento): array {
                return [
                    'id' => $evento->id,
                    'name' => $evento->nome,
                    'badges' => [
                        [
                            'label' => 'Inscrições',
                            'value' => (int) ($evento->inscricoes_count ?? 0),
                            'type' => 'primary',
                        ],
                    ],
                ];
            })
            ->values()
            ->all();
    }

    /**
     * Mapeia os últimos eventos concluídos para exibição com badges.
     *
     * Regra provisória:
     * - compareceram = total de inscrições
     * - faltaram = 0
     *
     * @return array<int, array<string, mixed>>
     */
    private function mapUltimosEventosConcluidos(Collection $eventos): array
    {
        return $eventos
            ->map(static function (Evento $evento): array {
                $totalInscricoes = (int) ($evento->inscricoes_count ?? 0);

                return [
                    'id' => $evento->id,
                    'name' => $evento->nome,
                    'badges' => [
                        [
                            'label' => 'Compareceram',
                            'value' => $totalInscricoes,
                            'type' => 'success',
                        ],
                        [
                            'label' => 'Faltaram',
                            'value' => 0,
                            'type' => 'danger',
                        ],
                    ],
                ];
            })
            ->values()
            ->all();
    }

    /**
     * Resolve a rota de eventos da secretaria, quando existir.
     */
    private function resolveEventosRoute(): ?string
    {
        if (Route::has('secretaria.eventos.index')) {
            return route('secretaria.eventos.index');
        }

        return null;
    }
}