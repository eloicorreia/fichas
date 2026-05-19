<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
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
