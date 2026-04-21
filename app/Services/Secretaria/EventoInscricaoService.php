<?php

declare(strict_types=1);

namespace App\Services\Secretaria;

use App\Models\Evento;
use App\Models\InscricaoCursilho;

class EventoInscricaoService
{
    /**
     * Cria uma inscrição já vinculada a um evento.
     *
     * @param array<string, mixed> $data
     */
    public function createForEvento(Evento $evento, array $data): InscricaoCursilho
    {
        $payload = $this->buildPayload($evento, $data);

        if (empty($payload['status_ficha'])) {
            $payload['status_ficha'] = InscricaoCursilho::STATUS_CANDIDATO;
        }

        return InscricaoCursilho::query()->create($payload);
    }

    /**
     * Atualiza uma inscrição mantendo consistência com o evento.
     *
     * @param array<string, mixed> $data
     */
    public function updateForEvento(
        Evento $evento,
        InscricaoCursilho $inscricao,
        array $data
    ): void {
        $payload = $this->buildPayload($evento, $data);

        $inscricao->update($payload);
    }

    /**
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function buildPayload(Evento $evento, array $data): array
    {
        $data['evento_id'] = $evento->id;
        $data['tipo_evento'] = $evento->tipo_evento;
        $data['publico_evento'] = $evento->publico_evento;
        $data['numero_evento'] = $evento->numero;

        return $data;
    }
}