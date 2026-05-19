<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $duplicados = DB::table('inscricoes_cursilho')
            ->select('evento_id', 'cpf_normalizado')
            ->whereNotNull('cpf_normalizado')
            ->groupBy('evento_id', 'cpf_normalizado')
            ->havingRaw('COUNT(*) > 1')
            ->exists();

        if ($duplicados) {
            throw new RuntimeException(
                'Existem inscrições duplicadas por evento_id + cpf_normalizado. Resolva os dados legados antes de criar o índice único.'
            );
        }

        Schema::table('inscricoes_cursilho', function (Blueprint $table): void {
            $table->unique(
                ['evento_id', 'cpf_normalizado'],
                'uk_inscricoes_evento_cpf_normalizado'
            );
        });
    }

    public function down(): void
    {
        Schema::table('inscricoes_cursilho', function (Blueprint $table): void {
            $table->dropUnique('uk_inscricoes_evento_cpf_normalizado');
        });
    }
};
