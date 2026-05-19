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
        $q = trim((string) request('q', ''));
        $status = $this->normalizeStatusFilter((string) request('status', ''));
        $sort = (string) request('sort', 'name');
        $dir = strtolower((string) request('dir', 'asc')) === 'desc' ? 'desc' : 'asc';

        $allowedSorts = [
            'name',
            'label',
            'active',
            'users_count',
            'permissions_count',
        ];

        if (! in_array($sort, $allowedSorts, true)) {
            $sort = 'name';
        }

        $roles = Role::query()
            ->withCount(['users', 'permissions'])
            ->when($q !== '', function ($query) use ($q): void {
                $query->where(function ($subQuery) use ($q): void {
                    $subQuery->where('name', 'like', "%{$q}%")
                        ->orWhere('label', 'like', "%{$q}%");
                });
            })
            ->when(in_array($status, ['0', '1'], true), function ($query) use ($status): void {
                $query->where('active', $status === '1');
            })
            ->orderBy($sort, $dir)
            ->orderBy('id')
            ->paginate(15)
            ->withQueryString();

        return view('secretaria.roles.index', [
            'roles' => $roles,
            'q' => $q,
            'status' => $status,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    public function create(): View
    {
        return view('secretaria.roles.create', [
            'role' => new Role,
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
        $data = $request->validated();

        if ($role->name === 'super-admin' && ($data['name'] ?? 'super-admin') !== 'super-admin') {
            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Não é possível alterar o identificador técnico do papel super-admin.');
        }

        if ($role->name === 'super-admin' && ($data['active'] ?? true) == false && $this->isOnlyActiveSuperAdminRole($role)) {
            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Não é possível desativar o último papel super-admin.');
        }

        try {
            DB::transaction(fn (): bool => $role->update($data));

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

        if ($role->name === 'super-admin' && $this->isOnlyActiveSuperAdminRole($role)) {
            return redirect()
                ->route('secretaria.roles.index')
                ->with('status', 'Não é possível excluir o último papel super-admin.');
        }

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

    private function isOnlyActiveSuperAdminRole(Role $role): bool
    {
        return $role->users()
            ->whereHas('roles', function ($query): void {
                $query->where('roles.name', 'super-admin')
                    ->where('roles.active', true);
            })
            ->exists()
            && Role::query()
                ->where('name', 'super-admin')
                ->where('active', true)
                ->whereKeyNot($role->id)
                ->doesntExist();
    }

    private function normalizeStatusFilter(string $status): string
    {
        return match (strtolower(trim($status))) {
            '0', 'false' => '0',
            '1', 'true' => '1',
            default => '',
        };
    }
}
