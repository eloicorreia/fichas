<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela pivô entre permissões e papéis.
     */
    public function up(): void
    {
        Schema::create('permission_role', function (Blueprint $table): void {
            $table->foreignId('permission_id')
                ->constrained('permissions')
                ->cascadeOnDelete();

            $table->foreignId('role_id')
                ->constrained('roles')
                ->cascadeOnDelete();

            $table->primary(['permission_id', 'role_id'], 'pk_permission_role');

            $table->index(['role_id'], 'idx_permission_role_role_id');
            $table->index(['permission_id'], 'idx_permission_role_permission_id');
        });
    }

    /**
     * Reverte a criação da tabela pivô entre permissões e papéis.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_role');
    }
};