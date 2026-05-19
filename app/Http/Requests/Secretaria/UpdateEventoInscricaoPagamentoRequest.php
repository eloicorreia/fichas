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
            'pagamento_comprovante_base64' => ['nullable', 'string'],
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
        ];
    }
}
