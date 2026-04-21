<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Executa o seeding dos papéis iniciais do sistema.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super-admin',
                'label' => 'Super Administrador',
                'active' => true,
            ],
            [
                'name' => 'secretaria',
                'label' => 'Secretaria',
                'active' => true,
            ],
            [
                'name' => 'consulta',
                'label' => 'Consulta',
                'active' => true,
            ],
        ];

        foreach ($roles as $roleData) {
            Role::query()->updateOrCreate(
                ['name' => $roleData['name']],
                [
                    'label' => $roleData['label'],
                    'active' => $roleData['active'],
                ]
            );
        }
    }
}