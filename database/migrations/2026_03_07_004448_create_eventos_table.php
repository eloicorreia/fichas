<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 150);
            $table->string('tipo_evento', 50);
            $table->string('publico_evento', 30);
            $table->unsignedInteger('numero');

            $table->string('coordenador_nome', 150)->nullable();
            $table->string('tesoureiro_nome', 150)->nullable();

            $table->string('status', 20)->default('PLANEJAMENTO');
            $table->boolean('ativo')->default(true);

            $table->dateTime('inicio_em');
            $table->dateTime('termino_em');
            $table->dateTime('aceita_inscricoes_ate')->nullable();

            $table->dateTime('janela_chegada_inicio')->nullable();
            $table->dateTime('janela_chegada_fim')->nullable();

            $table->decimal('valor_contribuicao', 10, 2)->nullable();
            $table->string('pix_chave', 160)->nullable();
            $table->string('pix_banco', 120)->nullable();
            $table->string('pix_favorecido', 160)->nullable();
            $table->string('pix_qr_code_path', 255)->nullable();
            $table->string('comprovante_whatsapp', 20)->nullable();
            $table->string('comprovante_responsavel', 150)->nullable();

            $table->string('logradouro', 180)->nullable();
            $table->string('numero_endereco', 20)->nullable();
            $table->string('complemento', 120)->nullable();
            $table->string('bairro', 120)->nullable();
            $table->string('cidade', 120)->nullable();
            $table->char('uf', 2)->nullable();
            $table->string('cep', 9)->nullable();

            $table->unsignedInteger('limite_inscricoes')->nullable();

            $table->string('descricao_publica_curta', 255)->nullable();
            $table->text('orientacoes_participante')->nullable();
            $table->text('encerramento_info')->nullable();
            $table->longText('informacoes_finais')->nullable();
            $table->text('observacoes_internas')->nullable();

            $table->timestamps();

            $table->unique(
                ['tipo_evento', 'publico_evento', 'numero'],
                'uk_eventos_tipo_publico_numero'
            );

            $table->index('status', 'idx_eventos_status');
            $table->index('ativo', 'idx_eventos_ativo');
            $table->index('inicio_em', 'idx_eventos_inicio_em');
            $table->index('aceita_inscricoes_ate', 'idx_eventos_aceita_inscricoes_ate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};