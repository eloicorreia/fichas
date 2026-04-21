<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\StoreSecurityUserRequest;
use App\Http\Requests\Secretaria\UpdateSecurityUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class SecurityUserController extends Controller
{
    public function index(): View
    {
        $q = trim((string) request('q', ''));
        $roleId = request('role');
        $sort = (string) request('sort', 'name');
        $dir = strtolower((string) request('dir', 'asc')) === 'desc' ? 'desc' : 'asc';

        $allowedSorts = [
            'name',
            'email',
        ];

        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'name';
        }

        $users = User::query()
            ->with('roles:id,name,label')
            ->when($q !== '', function ($query) use ($q): void {
                $query->where(function ($subQuery) use ($q): void {
                    $subQuery->where('name', 'like', "%{$q}%")
                        ->orWhere('email', 'like', "%{$q}%");
                });
            })
            ->when($roleId !== null && $roleId !== '', function ($query) use ($roleId): void {
                $query->whereHas('roles', function ($roleQuery) use ($roleId): void {
                    $roleQuery->where('roles.id', $roleId);
                });
            })
            ->orderBy($sort, $dir)
            ->orderBy('id')
            ->paginate(20)
            ->withQueryString();

        $roles = Role::query()
            ->where('active', true)
            ->orderBy('label')
            ->get(['id', 'name', 'label']);

        return view('secretaria.users.index', [
            'users' => $users,
            'roles' => $roles,
            'q' => $q,
            'roleId' => $roleId,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    public function create(): View
    {
        $roles = Role::query()
            ->where('active', true)
            ->orderBy('label')
            ->get();

        return view('secretaria.users.create', [
            'user' => new User(),
            'roles' => $roles,
            'selectedRoles' => [],
        ]);
    }

    public function store(StoreSecurityUserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $roleIds = $data['roles'] ?? [];
        unset($data['roles']);

        try {
            DB::transaction(function () use ($data, $roleIds): void {
                $user = User::query()->create($data);
                $user->roles()->sync($roleIds);
            });

            Log::info('Usuário criado com sucesso.', [
                'email' => $data['email'],
                'roles_count' => count($roleIds),
            ]);

            return redirect()
                ->route('secretaria.users.index')
                ->with('status', 'Usuário criado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao criar usuário.', [
                'email' => $data['email'] ?? null,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    public function edit(User $user): View
    {
        $user->load('roles:id');

        $roles = Role::query()
            ->where('active', true)
            ->orderBy('label')
            ->get();

        return view('secretaria.users.edit', [
            'user' => $user,
            'roles' => $roles,
            'selectedRoles' => $user->roles->pluck('id')->all(),
        ]);
    }

    public function update(UpdateSecurityUserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();
        $roleIds = $data['roles'] ?? [];
        unset($data['roles']);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        try {
            DB::transaction(function () use ($user, $data, $roleIds): void {
                $user->update($data);
                $user->roles()->sync($roleIds);
            });

            Log::info('Usuário atualizado com sucesso.', [
                'user_id' => $user->id,
                'email' => $user->email,
                'roles_count' => count($roleIds),
            ]);

            return redirect()
                ->route('secretaria.users.index')
                ->with('status', 'Usuário atualizado com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar usuário.', [
                'user_id' => $user->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }
}