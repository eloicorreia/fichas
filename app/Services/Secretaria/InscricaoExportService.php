<?php

declare(strict_types=1);

namespace App\Services\Secretaria;

use App\Models\InscricaoCursilho;
use Symfony\Component\HttpFoundation\StreamedResponse;

class InscricaoExportService
{
    /**
     * @param  iterable<int, InscricaoCursilho>  $inscricoes
     */
    public function download(iterable $inscricoes, string $filename): StreamedResponse
    {
        return response()->streamDownload(function () use ($inscricoes): void {
            $handle = fopen('php://output', 'wb');

            if ($handle === false) {
                return;
            }

            fwrite($handle, "\xEF\xBB\xBF");

            fputcsv($handle, [
                'Evento',
                'Nome',
                'CPF',
                'Telefone',
                'E-mail',
                'Status da ficha',
                'Pagamento',
                'Data de nascimento',
                'Estado civil',
                'Profissão',
                'Cidade',
                'Estado',
                'Paróquia',
                'Participa pastoral',
                'Finalizada em',
            ], ';');

            foreach ($inscricoes as $inscricao) {
                fputcsv($handle, [
                    $this->escapeCsvValue($inscricao->evento_label),
                    $this->escapeCsvValue($inscricao->nome),
                    $this->escapeCsvValue($inscricao->cpf),
                    $this->escapeCsvValue($inscricao->telefone_formatado),
                    $this->escapeCsvValue($inscricao->email),
                    $this->escapeCsvValue($inscricao->status_ficha),
                    $this->escapeCsvValue($inscricao->pagamento_status),
                    $this->escapeCsvValue(optional($inscricao->data_nascimento)?->format('d/m/Y')),
                    $this->escapeCsvValue($inscricao->estado_civil),
                    $this->escapeCsvValue($inscricao->profissao),
                    $this->escapeCsvValue($inscricao->cidade),
                    $this->escapeCsvValue($inscricao->estado),
                    $this->escapeCsvValue($inscricao->paroquia),
                    $this->escapeCsvValue($inscricao->participa_pastoral),
                    $this->escapeCsvValue(optional($inscricao->finalizada_em)?->format('d/m/Y H:i')),
                ], ';');
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    private function escapeCsvValue(mixed $value): string
    {
        $value = (string) ($value ?? '');

        if ($value !== '' && preg_match('/^[=+\-@\t\r\n]/', $value) === 1) {
            return "'".$value;
        }

        return $value;
    }
}
