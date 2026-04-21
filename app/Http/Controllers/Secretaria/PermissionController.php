<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StorePermissionRequest;
use App\Http\Requests\Secretaria\UpdatePermissionRequest;
use App\Models\Permission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class PermissionController extends Controller
{
    public function index(): View
    {
        $q = trim((string) request('q', ''));
        $status = request('status');
        $module = trim((string) request('module', ''));
        $sort = (string) request('sort', 'module');
        $dir = strtolower((string) request('dir', 'asc')) === 'desc' ? 'desc' : 'asc';

        $allowedSorts = [
            'name',
            'label',
            'module',
            'active',
            'roles_count',
        ];

        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'module';
        }

        $permissions = Permission::query()
            ->withCount('roles')
            ->when($q !== '', function ($query) use ($q): void {
                $query->where(function ($subQuery) use ($q): void {
                    $subQuery->where('name', 'like', "%{$q}%")
                        ->orWhere('label', 'like', "%{$q}%")
                        ->orWhere('module', 'like', "%{$q}%");
                });
            })
            ->when($status !== null && $status !== '', function ($query) use ($status): void {
                $query->where('active', (bool) $status);
            })
            ->when($module !== '', function ($query) use ($module): void {
                $query->where('module', $module);
            })
            ->orderBy($sort, $dir)
            ->orderBy('id')
            ->paginate(20)
            ->withQueryString();

        $modules = Permission::query()
            ->select('module')
            ->whereNotNull('module')
            ->distinct()
            ->orderBy('module')
            ->pluck('module');

        return view('secretaria.permissions.index', [
            'permissions' => $permissions,
            'modules' => $modules,
            'q' => $q,
            'status' => $status,
            'module' => $module,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    public function create(): View
    {
        return view('secretaria.permissions.create', [
            'permission' => new Permission(),
        ]);
    }

    public function store(StorePermissionRequest $request): RedirectResponse
    {
        try {
            $permission = DB::transaction(
                fn (): Permission => Permission::create($request->validated())
            );

            Log::info('Permissão criada com sucesso.', [
                'permission_id' => $permission->id,
                'permission_name' => $permission->name,
            ]);

            return redirect()
                ->route('secretaria.permissions.index')
                ->with('status', 'Permissão criada com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao criar permissão.', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function edit(Permission $permission): View
    {
        $permission->loadCount('roles');

        return view('secretaria.permissions.edit', [
            'permission' => $permission,
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission): RedirectResponse
    {
        try {
            DB::transaction(fn (): bool => $permission->update($request->validated()));

            Log::info('Permissão atualizada com sucesso.', [
                'permission_id' => $permission->id,
                'permission_name' => $permission->name,
            ]);

            return redirect()
                ->route('secretaria.permissions.index')
                ->with('status', 'Permissão atualizada com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar permissão.', [
                'permission_id' => $permission->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        $permission->loadCount('roles');

        if ($permission->roles_count > 0) {
            return redirect()
                ->route('secretaria.permissions.index')
                ->with('status', 'A permissão não pode ser excluída porque está vinculada a papéis.');
        }

        try {
            DB::transaction(fn (): ?bool => $permission->delete());

            Log::info('Permissão excluída com sucesso.', [
                'permission_id' => $permission->id,
                'permission_name' => $permission->name,
            ]);

            return redirect()
                ->route('secretaria.permissions.index')
                ->with('status', 'Permissão excluída com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao excluir permissão.', [
                'permission_id' => $permission->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}