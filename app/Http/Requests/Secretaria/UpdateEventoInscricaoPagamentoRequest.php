<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEventoInscricaoPagamentoRequest extends FormRequest
{
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
        ];
    }
}
