<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreRoleRequest;
use App\Http\Requests\Secretaria\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class RoleController extends Controller
{
    public function index(): View
    {
        $roles = Role::query()
            ->withCount(['users', 'permissions'])
            ->orderBy('name')
            ->paginate(15)
            ->withQueryString();

        return view('secretaria.roles.index', [
            'roles' => $roles,
        ]);
    }

    public function create(): View
    {
        return view('secretaria.roles.create', [
            'role' => new Role(),
        ]);
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        try {
            $role = DB::transaction(fn (): Role => Role::create($request->validated()));

            Log::info('Role criada com sucesso.', [
                'role_id' => $role->id,
                'role_name' => $role->name,
            ]);

            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Papel criado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao criar role.', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function edit(Role $role): View
    {
        $role->loadCount(['users', 'permissions']);

        return view('secretaria.roles.edit', [
            'role' => $role,
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        try {
            DB::transaction(fn (): bool => $role->update($request->validated()));

            Log::info('Role atualizada com sucesso.', [
                'role_id' => $role->id,
                'role_name' => $role->name,
            ]);

            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Papel atualizado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar role.', [
                'role_id' => $role->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function destroy(Role $role): RedirectResponse
    {
        $role->loadCount(['users', 'permissions']);

        if ($role->users_count > 0) {
            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'O papel não pode ser excluído porque possui usuários vinculados.');
        }

        if ($role->permissions_count > 0) {
            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'O papel não pode ser excluído porque possui permissões vinculadas.');
        }

        try {
            DB::transaction(fn (): ?bool => $role->delete());

            Log::info('Role excluída com sucesso.', [
                'role_id' => $role->id,
                'role_name' => $role->name,
            ]);

            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Papel excluído com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao excluir role.', [
                'role_id' => $role->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}