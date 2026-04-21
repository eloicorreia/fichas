<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', Rule::unique('permissions', 'name')],
            'label' => ['required', 'string', 'max:150'],
            'module' => ['required', 'string', 'max:100'],
            'active' => ['required', 'boolean'],
        ];
    }
}