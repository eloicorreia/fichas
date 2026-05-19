<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('inscricoes_cursilho', function (Blueprint $table): void {
            $table->softDeletes();
            $table->string('cpf_normalizado', 11)->nullable()->after('cpf');
            $table->string('telefone_normalizado', 20)->nullable()->after('telefone');
            $table->string('nome_normalizado', 120)->nullable()->after('nome');

            $table->index('cpf_normalizado', 'idx_inscricao_cursilho_cpf_normalizado');
            $table->index('telefone_normalizado', 'idx_inscricao_cursilho_telefone_normalizado');
            $table->index('nome_normalizado', 'idx_inscricao_cursilho_nome_normalizado');
        });

        DB::table('inscricoes_cursilho')
            ->orderBy('id')
            ->lazyById()
            ->each(function (object $inscricao): void {
                DB::table('inscricoes_cursilho')
                    ->where('id', $inscricao->id)
                    ->update([
                        'cpf_normalizado' => preg_replace('/\D+/', '', (string) $inscricao->cpf) ?: null,
                        'telefone_normalizado' => preg_replace('/\D+/', '', (string) $inscricao->telefone) ?: null,
                        'nome_normalizado' => mb_strtolower((string) $inscricao->nome),
                    ]);
            });
    }

    public function down(): void
    {
        /*
         * Não removemos deleted_at nem campos normalizados automaticamente.
         * A reversão apagaria dados operacionais de exclusão lógica e busca.
         * Se necessário, remova colunas e índices manualmente após avaliar
         * o impacto sobre auditoria, restauração e consultas.
         */
    }
};
