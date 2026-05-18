<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Cria permissões granulares de inscrição em ambientes já implantados.
     */
    public function up(): void
    {
        $now = now();

        $permissions = [
            'inscricao.create' => 'Criar inscrições',
            'inscricao.update' => 'Alterar inscrições',
            'inscricao.delete' => 'Excluir inscrições',
            'inscricao.export' => 'Exportar inscrições',
        ];

        foreach ($permissions as $name => $label) {
            $exists = DB::table('permissions')
                ->where('name', $name)
                ->exists();

            if ($exists) {
                DB::table('permissions')
                    ->where('name', $name)
                    ->update([
                        'label' => $label,
                        'module' => 'inscricao',
                        'active' => true,
                        'updated_at' => $now,
                    ]);

                continue;
            }

            DB::table('permissions')->insert([
                'name' => $name,
                'label' => $label,
                'module' => 'inscricao',
                'active' => true,
                'updated_at' => $now,
                'created_at' => $now,
            ]);
        }

        $reviewPermissionId = DB::table('permissions')
            ->where('name', 'inscricao.review')
            ->value('id');

        if ($reviewPermissionId !== null) {
            $roleIdsWithReview = DB::table('permission_role')
                ->where('permission_id', $reviewPermissionId)
                ->pluck('role_id');
        } else {
            $roleIdsWithReview = collect();
        }

        $roleIds = DB::table('roles')
            ->whereIn('name', ['super-admin', 'secretaria'])
            ->pluck('id')
            ->merge($roleIdsWithReview)
            ->unique();

        $permissionIds = DB::table('permissions')
            ->whereIn('name', array_keys($permissions))
            ->pluck('id');

        foreach ($roleIds as $roleId) {
            foreach ($permissionIds as $permissionId) {
                DB::table('permission_role')->updateOrInsert([
                    'role_id' => $roleId,
                    'permission_id' => $permissionId,
                ]);
            }
        }
    }

    /**
     * Remove permissões granulares criadas por esta migration.
     */
    public function down(): void
    {
        $permissionIds = DB::table('permissions')
            ->whereIn('name', [
                'inscricao.create',
                'inscricao.update',
                'inscricao.delete',
                'inscricao.export',
            ])
            ->pluck('id');

        DB::table('permission_role')
            ->whereIn('permission_id', $permissionIds)
            ->delete();

        DB::table('permissions')
            ->whereIn('id', $permissionIds)
            ->delete();
    }
};
