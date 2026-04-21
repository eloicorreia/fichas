<?php

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
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
            ->where('eventos.ativo', 1)
            ->where('eventos.status', '!=', 'ENCERRADO')
            ->whereNotNull('eventos.aceita_inscricoes_ate')
            ->where('eventos.aceita_inscricoes_ate', '>=', $agora)
            ->orderBy('eventos.inicio_em', 'asc')
            ->get();

        $cards = [
            [
                'titulo' => 'Eventos abertos',
                'quantidade' => $eventosAbertos->count(),
                'descricao' => 'Eventos com inscrições abertas no momento.',
                'rota' => route('secretaria.eventos.index'),
                'rota_texto' => 'Ver eventos',
            ],
        ];

        return view('secretaria.dashboard', [
            'cards' => $cards,
            'eventosAbertos' => $eventosAbertos,
        ]);
    }
}