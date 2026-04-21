<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\UpdateRolePermissionsRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class RolePermissionController extends Controller
{
    /**
     * Exibe a tela de associação de permissões ao papel.
     */
    public function edit(Role $role): View
    {
        $role->load('permissions:id');

        $permissions = Permission::query()
            ->where('active', true)
            ->orderBy('module')
            ->orderBy('label')
            ->get()
            ->groupBy('module');

        return view('secretaria.roles.permissions', [
            'role' => $role,
            'permissions' => $permissions,
            'selectedPermissions' => $role->permissions->pluck('id')->all(),
        ]);
    }

    /**
     * Atualiza as permissões associadas ao papel.
     */
    public function update(UpdateRolePermissionsRequest $request, Role $role): RedirectResponse
    {
        $permissionIds = $request->validated('permissions') ?? [];

        try {
            DB::transaction(function () use ($role, $permissionIds): void {
                $role->permissions()->sync($permissionIds);
            });

            Log::info('Permissões do papel atualizadas com sucesso.', [
                'role_id' => $role->id,
                'permissions_count' => count($permissionIds),
            ]);

            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Permissões do papel atualizadas com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar permissões do papel.', [
                'role_id' => $role->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}