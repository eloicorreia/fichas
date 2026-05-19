<?php

declare(strict_types=1);

namespace App\Services\Secretaria;

use App\Models\Evento;
use App\Models\InscricaoCursilho;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class EventoInscricaoService
{
    /**
     * @param  array<string, mixed>  $data
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
     * @param  array<string, mixed>  $data
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
     * @param  array<string, mixed>  $data
     */
    public function updatePagamentoForEvento(
        Evento $evento,
        InscricaoCursilho $inscricao,
        array $data
    ): void {
        if ((int) $inscricao->evento_id !== (int) $evento->id) {
            abort(404);
        }

        $pagamentoConfirmado = (bool) ($data['pagamento_confirmado'] ?? false);

        $inscricao->forceFill([
            'pagamento_confirmado' => $pagamentoConfirmado,
            'pagamento_data' => $pagamentoConfirmado
                ? ($data['pagamento_data'] ?? null)
                : null,
            'pagamento_comprovante_base64' => $pagamentoConfirmado
                ? ($data['pagamento_comprovante_base64'] ?? $inscricao->pagamento_comprovante_base64)
                : null,
        ])->save();
    }

    public function deleteForEvento(Evento $evento, InscricaoCursilho $inscricao): void
    {
        if ((int) $inscricao->evento_id !== (int) $evento->id) {
            abort(404);
        }

        if ($inscricao->pagamento_confirmado) {
            Log::warning('Exclusão de inscrição bloqueada por pagamento confirmado.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
            ]);

            throw ValidationException::withMessages([
                'inscricao' => 'Não é possível excluir uma inscrição com pagamento confirmado.',
            ]);
        }

        if ($inscricao->finalizada_em !== null) {
            Log::warning('Exclusão de inscrição bloqueada por ficha finalizada.', [
                'evento_id' => $evento->id,
                'inscricao_id' => $inscricao->id,
            ]);

            throw ValidationException::withMessages([
                'inscricao' => 'Não é possível excluir uma inscrição finalizada.',
            ]);
        }

        Log::notice('Inscrição autorizada para exclusão.', [
            'evento_id' => $evento->id,
            'inscricao_id' => $inscricao->id,
        ]);

        $inscricao->delete();
    }

    public function restoreForEvento(Evento $evento, InscricaoCursilho $inscricao): void
    {
        if ((int) $inscricao->evento_id !== (int) $evento->id) {
            abort(404);
        }

        if (! $inscricao->trashed()) {
            throw ValidationException::withMessages([
                'inscricao' => 'Esta inscrição não está excluída.',
            ]);
        }

        if ($inscricao->cpf_normalizado) {
            $hasActiveCpfConflict = InscricaoCursilho::query()
                ->where('evento_id', $evento->id)
                ->where('cpf_normalizado', $inscricao->cpf_normalizado)
                ->whereKeyNot($inscricao->id)
                ->exists();

            if ($hasActiveCpfConflict) {
                throw ValidationException::withMessages([
                    'inscricao' => 'Não é possível restaurar esta inscrição porque já existe uma inscrição ativa com o mesmo CPF neste evento.',
                ]);
            }
        }

        $inscricao->restore();
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    private function buildPayload(Evento $evento, array $data): array
    {
        unset($data['pagamento_comprovante_base64']);

        $data['evento_id'] = $evento->id;
        $data['tipo_evento'] = $evento->tipo_evento;
        $data['publico_evento'] = $evento->publico_evento;
        $data['numero_evento'] = $evento->numero;

        return $data;
    }
}
