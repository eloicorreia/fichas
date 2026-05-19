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
            'inscricao.payment' => 'Alterar pagamentos de inscrições',
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
     * Preserva permissões e vínculos operacionais em produção.
     */
    public function down(): void
    {
        /*
         * Não removemos permissões nem vínculos automaticamente.
         * Essas permissões podem estar em uso em produção e a remoção
         * automática poderia revogar acessos configurados manualmente.
         *
         * Se necessário, remova permissões e vínculos manualmente após
         * avaliar o impacto operacional.
         */
    }
};
