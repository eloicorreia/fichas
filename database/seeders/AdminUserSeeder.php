<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class AdminUserSeeder extends Seeder
{
    /**
     * Executa o vínculo do usuário administrador inicial ao papel super-admin.
     */
    public function run(): void
    {
        $adminEmail = env('ADMIN_USER_EMAIL', 'eloi.correia@gmail.com');

        if (!is_string($adminEmail) || trim($adminEmail) === '') {
            throw new RuntimeException(
                'O e-mail do usuário administrador não foi definido corretamente.'
            );
        }

        $user = User::query()
            ->where('email', $adminEmail)
            ->first();

        if (!$user) {
            throw new RuntimeException(
                "Usuário administrador não encontrado para o e-mail: {$adminEmail}"
            );
        }

        $role = Role::query()
            ->where('name', 'super-admin')
            ->first();

        if (!$role) {
            throw new RuntimeException(
                'O papel super-admin não foi encontrado. '
                .'Execute o RoleSeeder antes do AdminUserSeeder.'
            );
        }

        $user->roles()->syncWithoutDetaching([$role->id]);
    }
}