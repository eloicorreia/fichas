<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscricoes_cursilho', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('evento_id');
            $table->string('tipo_evento', 50);
            $table->string('publico_evento', 30);
            $table->unsignedInteger('numero_evento');

            $table->string('status_ficha', 20)->default('CANDIDATO');
            $table->boolean('aceitou_termo')->default(false);
            $table->dateTime('finalizada_em')->nullable();

            $table->string('nome', 120);
            $table->date('data_nascimento');
            $table->string('estado_civil', 20);
            $table->string('cpf', 14);

            $table->date('data_casamento')->nullable();
            $table->string('cidade_casou', 160)->nullable();
            $table->string('igreja_casou', 100)->nullable();

            $table->string('nome_mae', 160);
            $table->unsignedInteger('numero_filhos')->nullable();
            $table->string('profissao', 120)->nullable();
            $table->string('telefone', 20);
            $table->string('email', 150)->nullable();
            $table->string('grau_instrucao', 40)->nullable();
            $table->string('cep', 9);
            $table->string('endereco', 180);
            $table->string('bairro', 120);
            $table->string('cidade', 120);
            $table->char('estado', 2);
            $table->string('participa_igreja', 3);

            $table->boolean('sacramento_batizado')->default(false);
            $table->boolean('sacramento_eucaristia')->default(false);
            $table->boolean('sacramento_crisma')->default(false);

            $table->string('paroquia', 160)->nullable();
            $table->string('participa_pastoral', 3)->nullable();
            $table->text('quais_pastorais')->nullable();

            $table->text('contato_familia_missa');
            $table->text('alimentacao_especial');
            $table->text('padrinho_madrinha_contato');

            $table->boolean('pagamento_confirmado')->default(false);
            $table->date('pagamento_data')->nullable();
            $table->longText('pagamento_comprovante_base64')->nullable();

            $table->timestamps();

            $table->unique(['evento_id', 'cpf'], 'uk_inscricao_cursilho_evento_cpf');

            $table->index('evento_id', 'idx_inscricao_cursilho_evento');
            $table->index('status_ficha', 'idx_inscricao_cursilho_status');
            $table->index('publico_evento', 'idx_inscricao_cursilho_publico');
            $table->index('numero_evento', 'idx_inscricao_cursilho_numero');
            $table->index('nome', 'idx_inscricao_cursilho_nome');
            $table->index('created_at', 'idx_inscricao_cursilho_created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscricoes_cursilho');
    }
};