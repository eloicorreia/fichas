<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Support\DatabaseConstraintDetector;
use Illuminate\Database\QueryException;
use PDOException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class DatabaseConstraintDetectorTest extends TestCase
{
    public function test_detecta_nome_do_indice_unico_de_cpf_da_inscricao(): void
    {
        $exception = $this->queryException(
            'SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry for key uk_inscricoes_evento_cpf_normalizado',
            ['23000', 1062]
        );

        $this->assertTrue(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    public function test_detecta_mensagem_sqlite_da_constraint_unica_de_cpf_da_inscricao(): void
    {
        $exception = $this->queryException(
            'UNIQUE constraint failed: inscricoes_cursilho.evento_id, inscricoes_cursilho.cpf_normalizado',
            ['23000', 19]
        );

        $this->assertTrue(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    public function test_detecta_sqlstate_23000_com_driver_code_mysql_1062_quando_eh_cpf_da_inscricao(): void
    {
        $exception = $this->queryException(
            'SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry for key uk_inscricoes_evento_cpf_normalizado',
            ['23000', 1062]
        );

        $this->assertTrue(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    public function test_detecta_sqlstate_23000_com_driver_code_sqlite_19_quando_eh_cpf_da_inscricao(): void
    {
        $exception = $this->queryException(
            'SQLSTATE[23000]: Integrity constraint violation: 19 UNIQUE constraint failed: inscricoes_cursilho.evento_id, inscricoes_cursilho.cpf_normalizado',
            ['23000', 19]
        );

        $this->assertTrue(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    public function test_nao_detecta_query_exception_sem_relacao_com_cpf(): void
    {
        $exception = new QueryException(
            'testing',
            'select * from tabela_inexistente',
            [],
            new RuntimeException('no such table: tabela_inexistente')
        );

        $this->assertFalse(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    public function test_nao_detecta_outra_constraint_unique(): void
    {
        $exception = $this->queryException(
            'SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry for key users_email_unique',
            ['23000', 1062]
        );

        $this->assertFalse(DatabaseConstraintDetector::isUniqueCpfInscricaoViolation($exception));
    }

    /**
     * @param  array{0: string, 1: int}  $errorInfo
     */
    private function queryException(string $message, array $errorInfo): QueryException
    {
        $previous = new PDOException($message, (int) $errorInfo[0]);
        $previous->errorInfo = $errorInfo;

        return new QueryException(
            'testing',
            'insert into inscricoes_cursilho (evento_id, cpf_normalizado) values (?, ?)',
            [1, '52998224725'],
            $previous
        );
    }
}
