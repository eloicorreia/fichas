<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Secretaria\UpdateUserRolesRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserRoleController extends Controller
{
    public function edit(User $user): View
    {
        $user->load('roles:id');

        $roles = Role::query()
            ->where('active', true)
            ->orderBy('label')
            ->get();

        return view('secretaria.users.roles', [
            'user' => $user,
            'roles' => $roles,
            'selectedRoles' => $user->roles->pluck('id')->all(),
        ]);
    }

    public function update(UpdateUserRolesRequest $request, User $user): RedirectResponse
    {
        $roleIds = $request->validated('roles') ?? [];

        if ($this->wouldRemoveLastSuperAdmin($user, $roleIds)) {
            return redirect()
                ->route('secretaria.users.index')
                ->with('status', 'Não é possível remover o último super administrador.');
        }

        try {
            DB::transaction(function () use ($user, $roleIds): void {
                $user->roles()->sync($roleIds);
            });

            Log::info('Papéis do usuário atualizados com sucesso.', [
                'user_id' => $user->id,
                'roles_count' => count($roleIds),
            ]);

            return redirect()
                ->route('secretaria.users.index')
                ->with('status', 'Papéis do usuário atualizados com sucesso.');
        } catch (Throwable $exception) {
            Log::error('Erro ao atualizar papéis do usuário.', [
                'user_id' => $user->id,
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            throw $exception;
        }
    }

    /**
     * @param  array<int, int|string>  $roleIds
     */
    private function wouldRemoveLastSuperAdmin(User $user, array $roleIds): bool
    {
        if (! $user->hasRole('super-admin')) {
            return false;
        }

        $keepsSuperAdminRole = Role::query()
            ->whereIn('id', $roleIds)
            ->where('name', 'super-admin')
            ->where('active', true)
            ->exists();

        if ($keepsSuperAdminRole) {
            return false;
        }

        return User::query()
            ->whereKeyNot($user->id)
            ->whereHas('roles', function ($query): void {
                $query->where('roles.name', 'super-admin')
                    ->where('roles.active', true);
            })
            ->doesntExist();
    }
}
