<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEventoInscricaoPagamentoRequest extends FormRequest
{
    private const COMPROVANTE_MAX_CHARS = 1_398_104;

    private const COMPROVANTE_ALLOWED_PREFIXES = [
        'data:application/pdf;base64,',
        'data:image/png;base64,',
        'data:image/jpeg;base64,',
    ];

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'pagamento_confirmado' => ['required', 'boolean'],
            'pagamento_data' => [
                Rule::requiredIf($this->boolean('pagamento_confirmado')),
                'nullable',
                'date',
                'before_or_equal:today',
            ],
            'pagamento_comprovante_base64' => [
                'nullable',
                'string',
                'max:'.self::COMPROVANTE_MAX_CHARS,
                function (string $attribute, mixed $value, \Closure $fail): void {
                    if ($value === null || $value === '') {
                        return;
                    }

                    $value = (string) $value;
                    $prefix = collect(self::COMPROVANTE_ALLOWED_PREFIXES)
                        ->first(fn (string $allowedPrefix): bool => str_starts_with($value, $allowedPrefix));

                    if ($prefix === null) {
                        $fail('O comprovante deve ser um PDF, PNG ou JPEG em base64.');

                        return;
                    }

                    $base64 = substr($value, strlen($prefix));
                    $decoded = base64_decode($base64, true);

                    if ($base64 === '' || preg_match('/^[A-Za-z0-9+\/=\r\n]+$/', $base64) !== 1 || $decoded === false) {
                        $fail('O comprovante informado não é um base64 válido.');

                        return;
                    }

                    if (! $this->hasValidFileSignature($prefix, $decoded)) {
                        $fail('O conteúdo do comprovante não corresponde ao tipo informado.');
                    }
                },
            ],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'pagamento_data.required' => 'Informe a data do pagamento quando o pagamento estiver confirmado.',
            'pagamento_data.before_or_equal' => 'A data do pagamento não pode ser futura.',
            'pagamento_comprovante_base64.max' => 'O comprovante não pode ultrapassar 1 MB.',
        ];
    }

    private function hasValidFileSignature(string $prefix, string $decoded): bool
    {
        return match ($prefix) {
            'data:application/pdf;base64,' => str_starts_with($decoded, '%PDF'),
            'data:image/png;base64,' => str_starts_with($decoded, "\x89PNG"),
            'data:image/jpeg;base64,' => str_starts_with($decoded, "\xFF\xD8\xFF"),
            default => false,
        };
    }
}
