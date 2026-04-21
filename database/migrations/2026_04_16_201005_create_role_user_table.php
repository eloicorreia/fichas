<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela pivô entre usuários e papéis.
     */
    public function up(): void
    {
        Schema::create('role_user', function (Blueprint $table): void {
            $table->foreignId('role_id')
                ->constrained('roles')
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->primary(['role_id', 'user_id'], 'pk_role_user');

            $table->index(['user_id'], 'idx_role_user_user_id');
            $table->index(['role_id'], 'idx_role_user_role_id');
        });
    }

    /**
     * Reverte a criação da tabela pivô entre usuários e papéis.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};