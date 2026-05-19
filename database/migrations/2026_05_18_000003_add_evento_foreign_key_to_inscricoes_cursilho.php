<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $orfaCount = DB::table('inscricoes_cursilho')
            ->leftJoin('eventos', 'eventos.id', '=', 'inscricoes_cursilho.evento_id')
            ->whereNull('eventos.id')
            ->count();

        if ($orfaCount > 0) {
            throw new RuntimeException(
                "Não foi possível adicionar FK de inscrições para eventos: existem {$orfaCount} inscrição(ões) órfã(s). Corrija os dados antes de migrar."
            );
        }

        Schema::table('inscricoes_cursilho', function (Blueprint $table): void {
            $table->foreign('evento_id', 'fk_inscricao_cursilho_evento')
                ->references('id')
                ->on('eventos')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('inscricoes_cursilho', function (Blueprint $table): void {
            $table->dropForeign('fk_inscricao_cursilho_evento');
        });
    }
};
