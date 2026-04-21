<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:100',
                'alpha_dash',
                Rule::unique('roles', 'name'),
            ],
            'label' => [
                'required',
                'string',
                'max:150',
            ],
            'active' => [
                'required',
                'boolean',
            ],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O nome do papel é obrigatório.',
            'name.alpha_dash' => 'O nome do papel deve conter apenas letras, números, hífen e underline.',
            'name.unique' => 'Já existe um papel com esse nome.',
            'label.required' => 'O rótulo do papel é obrigatório.',
            'active.required' => 'O status do papel é obrigatório.',
        ];
    }
}