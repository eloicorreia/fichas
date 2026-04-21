<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    public const STATUS_PLANEJAMENTO = 'PLANEJAMENTO';
    public const STATUS_ABERTO = 'ABERTO';
    public const STATUS_FECHADO = 'FECHADO';

    public const TIPO_EVENTO_CURSILHO = 'CURSILHO';
    public const TIPO_EVENTO_ASSEMBLEIA = 'ASSEMBLEIA';
    public const TIPO_EVENTO_ENCONTRO = 'ENCONTRO';

    public const PUBLICO_HOMENS = 'HOMENS';
    public const PUBLICO_MULHERES = 'MULHERES';
    public const PUBLICO_JOVENS = 'JOVENS';
    public const PUBLICO_GERAL = 'GERAL';
    public const PUBLICO_CASAIS = 'CASAIS';
    public const PUBLICO_DIOCESANA = 'DIOCESANA';

    protected $table = 'eventos';

    protected $fillable = [
        'nome',
        'tipo_evento',
        'publico_evento',
        'numero',
        'coordenador_nome',
        'tesoureiro_nome',
        'status',
        'ativo',
        'inicio_em',
        'termino_em',
        'aceita_inscricoes_ate',
        'janela_chegada_inicio',
        'janela_chegada_fim',
        'valor_contribuicao',
        'pix_chave',
        'pix_banco',
        'pix_favorecido',
        'pix_qr_code_path',
        'comprovante_whatsapp',
        'comprovante_responsavel',
        'logradouro',
        'numero_endereco',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'dias',
        'limite_inscricoes',
        'descricao_publica_curta',
        'orientacoes_participante',
        'encerramento_info',
        'informacoes_finais',
        'observacoes_internas',
        'inicio_descricao',
        'final_descricao'
    ];

    protected function casts(): array
    {
        return [
            'ativo' => 'boolean',
            'inicio_em' => 'datetime',
            'termino_em' => 'datetime',
            'aceita_inscricoes_ate' => 'datetime',
            'janela_chegada_inicio' => 'datetime',
            'janela_chegada_fim' => 'datetime',
            'valor_contribuicao' => 'decimal:2',
            'limite_inscricoes' => 'integer',
        ];
    }

    public static function getTiposEvento(): array
    {
        return [
            self::TIPO_EVENTO_CURSILHO,
            self::TIPO_EVENTO_ASSEMBLEIA,
            self::TIPO_EVENTO_ENCONTRO,
        ];
    }

    public static function getPublicosEvento(): array
    {
        return [
            self::PUBLICO_HOMENS,
            self::PUBLICO_MULHERES,
            self::PUBLICO_JOVENS,
            self::PUBLICO_GERAL,
            self::PUBLICO_CASAIS,
        ];
    }

    public static function getStatusDisponiveis(): array
    {
        return [
            self::STATUS_PLANEJAMENTO,
            self::STATUS_ABERTO,
            self::STATUS_FECHADO,
        ];
    }

    /**
     * Retorna as inscrições vinculadas ao evento.
     */
    public function inscricoes(): HasMany
    {
        return $this->hasMany(InscricaoCursilho::class, 'evento_id');
    }
}