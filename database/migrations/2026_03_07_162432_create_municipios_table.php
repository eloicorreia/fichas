<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_municipio');
            $table->string('nome_municipio', 150);
            $table->char('uf', 2);
            $table->timestamps();

            $table->unique('id_municipio', 'uk_municipios_id_municipio');
            $table->index(['nome_municipio', 'uf'], 'idx_municipios_nome_uf');
            $table->index('uf', 'idx_municipios_uf');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('municipio');
    }
};