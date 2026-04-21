<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use RuntimeException;

class PermissionSeeder extends Seeder
{
    /**
     * Executa o seeding das permissões iniciais e
     * vincula as permissões aos papéis base do sistema.
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
     * Sincroniza as permissões iniciais por papel.
     */
    private function syncRolePermissions(): void
    {
        $superAdmin = $this->findRoleByName('super-admin');
        $secretaria = $this->findRoleByName('secretaria');
        $consulta = $this->findRoleByName('consulta');

        $allPermissionIds = Permission::query()->pluck('id')->all();

        $superAdmin->permissions()->sync($allPermissionIds);

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

        $consulta->permissions()->sync(
            $this->findPermissionIdsByNames([
                'dashboard.view',
                'evento.view',
                'inscricao.view',
                'usuario.view',
            ])
        );
    }

    /**
     * Localiza um papel pelo nome.
     */
    private function findRoleByName(string $name): Role
    {
        $role = Role::query()
            ->where('name', $name)
            ->first();

        if (!$role) {
            throw new RuntimeException("Papel não encontrado para o seeder: {$name}");
        }

        return $role;
    }

    /**
     * Localiza os IDs das permissões a partir dos nomes informados.
     *
     * @param array<int, string> $names
     * @return array<int, int>
     */
    private function findPermissionIdsByNames(array $names): array
    {
        $permissions = Permission::query()
            ->whereIn('name', $names)
            ->pluck('id', 'name');

        $this->assertAllPermissionsWereFound($permissions, $names);

        return $permissions->values()->all();
    }

    /**
     * Garante que todas as permissões esperadas foram localizadas.
     *
     * @param Collection<string, int> $permissions
     * @param array<int, string> $expectedNames
     */
    private function assertAllPermissionsWereFound(Collection $permissions, array $expectedNames): void
    {
        $foundNames = $permissions->keys()->all();

        $missingNames = array_values(array_diff($expectedNames, $foundNames));

        if ($missingNames === []) {
            return;
        }

        throw new RuntimeException(
            'Permissões não encontradas para o seeder: '.implode(', ', $missingNames)
        );
    }
}