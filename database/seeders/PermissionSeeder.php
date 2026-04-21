<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Executa o seeder de permissões e vínculos com papéis.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'dashboard.view',
                'label' => 'Visualizar dashboard',
                'module' => 'dashboard',
                'active' => true,
            ],
            [
                'name' => 'evento.view',
                'label' => 'Visualizar eventos',
                'module' => 'evento',
                'active' => true,
            ],
            [
                'name' => 'evento.create',
                'label' => 'Criar eventos',
                'module' => 'evento',
                'active' => true,
            ],
            [
                'name' => 'evento.update',
                'label' => 'Alterar eventos',
                'module' => 'evento',
                'active' => true,
            ],
            [
                'name' => 'evento.delete',
                'label' => 'Excluir eventos',
                'module' => 'evento',
                'active' => true,
            ],
            [
                'name' => 'inscricao.view',
                'label' => 'Visualizar inscrições',
                'module' => 'inscricao',
                'active' => true,
            ],
            [
                'name' => 'inscricao.review',
                'label' => 'Revisar inscrições',
                'module' => 'inscricao',
                'active' => true,
            ],
            [
                'name' => 'usuario.view',
                'label' => 'Visualizar usuários',
                'module' => 'usuario',
                'active' => true,
            ],
            [
                'name' => 'usuario.manage',
                'label' => 'Gerenciar usuários',
                'module' => 'usuario',
                'active' => true,
            ],
            [
                'name' => 'role.view',
                'label' => 'Visualizar papéis',
                'module' => 'role',
                'active' => true,
            ],
            [
                'name' => 'role.manage',
                'label' => 'Gerenciar papéis',
                'module' => 'role',
                'active' => true,
            ],
            [
                'name' => 'permission.view',
                'label' => 'Visualizar permissões',
                'module' => 'permission',
                'active' => true,
            ],
            [
                'name' => 'permission.manage',
                'label' => 'Gerenciar permissões',
                'module' => 'permission',
                'active' => true,
            ],
        ];

        foreach ($permissions as $permissionData) {
            Permission::query()->updateOrCreate(
                ['name' => $permissionData['name']],
                [
                    'label' => $permissionData['label'],
                    'module' => $permissionData['module'],
                    'active' => $permissionData['active'],
                ]
            );
        }

        $this->syncRolePermissions();
    }

    /**
     * Sincroniza as permissões de cada papel do sistema.
     */
    private function syncRolePermissions(): void
    {
        $superAdmin = Role::query()
            ->where('name', 'super-admin')
            ->first();

        $secretaria = Role::query()
            ->where('name', 'secretaria')
            ->first();

        $consulta = Role::query()
            ->where('name', 'consulta')
            ->first();

        if ($superAdmin) {
            $allPermissionIds = Permission::query()
                ->pluck('id')
                ->all();

            $superAdmin->permissions()->sync($allPermissionIds);
        }

        if ($secretaria) {
            $secretaria->permissions()->sync(
                $this->findPermissionIdsByNames([
                    'dashboard.view',
                    'evento.view',
                    'evento.create',
                    'evento.update',
                    'inscricao.view',
                    'inscricao.review',
                    'usuario.view',
                ])
            );
        }

        if ($consulta) {
            $consulta->permissions()->sync(
                $this->findPermissionIdsByNames([
                    'dashboard.view',
                    'evento.view',
                    'inscricao.view',
                    'usuario.view',
                ])
            );
        }
    }

    /**
     * Retorna os ids das permissões com base nos nomes informados.
     *
     * @param array<int, string> $permissionNames
     * @return array<int, int>
     */
    private function findPermissionIdsByNames(array $permissionNames): array
    {
        return Permission::query()
            ->whereIn('name', $permissionNames)
            ->pluck('id')
            ->all();
    }
}