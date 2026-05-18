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
                    $inscricao->evento_label,
                    $inscricao->nome,
                    $inscricao->cpf,
                    $inscricao->telefone_formatado,
                    $inscricao->email,
                    $inscricao->status_ficha,
                    $inscricao->pagamento_status,
                    optional($inscricao->data_nascimento)?->format('d/m/Y'),
                    $inscricao->estado_civil,
                    $inscricao->profissao,
                    $inscricao->cidade,
                    $inscricao->estado,
                    $inscricao->paroquia,
                    $inscricao->participa_pastoral,
                    optional($inscricao->finalizada_em)?->format('d/m/Y H:i'),
                ], ';');
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }
}
