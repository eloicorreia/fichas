<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CpfValido implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! self::isValid((string) $value)) {
            $fail('CPF inválido.');
        }
    }

    public static function isValid(?string $cpf): bool
    {
        if ($cpf === null) {
            return false;
        }

        $cpf = preg_replace('/\D+/', '', $cpf);

        if (! is_string($cpf) || strlen($cpf) !== 11) {
            return false;
        }

        if (preg_match('/^(\d)\1{10}$/', $cpf) === 1) {
            return false;
        }

        $sum = 0;
        for ($i = 0, $w = 10; $i < 9; $i++, $w--) {
            $sum += ((int) $cpf[$i]) * $w;
        }

        $d1 = ($sum * 10) % 11;
        $d1 = $d1 === 10 ? 0 : $d1;

        $sum = 0;
        for ($i = 0, $w = 11; $i < 10; $i++, $w--) {
            $sum += ((int) $cpf[$i]) * $w;
        }

        $d2 = ($sum * 10) % 11;
        $d2 = $d2 === 10 ? 0 : $d2;

        return $d1 === (int) $cpf[9] && $d2 === (int) $cpf[10];
    }

    public static function format(string $cpf): string
    {
        $digits = preg_replace('/\D+/', '', $cpf) ?: '';

        return substr($digits, 0, 3).'.'
            .substr($digits, 3, 3).'.'
            .substr($digits, 6, 3).'-'
            .substr($digits, 9, 2);
    }
}
