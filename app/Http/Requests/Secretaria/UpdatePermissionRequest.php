<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use App\Models\Permission;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var Permission $permission */
        $permission = $this->route('permission');

        return [
            'name' => [
                'required',
                'string',
                'max:150',
                Rule::unique('permissions', 'name')->ignore($permission->id),
            ],
            'label' => ['required', 'string', 'max:150'],
            'module' => ['required', 'string', 'max:100'],
            'active' => ['required', 'boolean'],
        ];
    }
}