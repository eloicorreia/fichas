<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Database\QueryException;

class DatabaseConstraintDetector
{
    public static function isUniqueCpfInscricaoViolation(QueryException $exception): bool
    {
        $sqlState = (string) ($exception->errorInfo[0] ?? $exception->getCode());
        $driverCode = (int) ($exception->errorInfo[1] ?? 0);
        $message = $exception->getMessage();

        return str_contains($message, 'uk_inscricoes_evento_cpf_normalizado')
            || str_contains($message, 'inscricoes_cursilho.evento_id, inscricoes_cursilho.cpf_normalizado')
            || ($sqlState === '23000' && in_array($driverCode, [0, 19, 1062], true));
    }
}
