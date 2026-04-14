<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscricaoCursilho extends Model
{
    public const STATUS_CANDIDATO = 'CANDIDATO';
    public const STATUS_DESISTENTE = 'DESISTENTE';
    public const STATUS_NEO = 'NEO';
    public const STATUS_CURSILHISTA = 'CURSILHISTA';

    protected $table = 'inscricoes_cursilho';

    protected $fillable = [
        'evento_id',
        'tipo_evento',
        'publico_evento',
        'numero_evento',
        'status_ficha',
        'aceitou_termo',
        'finalizada_em',
        'nome',
        'data_nascimento',
        'estado_civil',
        'cpf',
        'data_casamento',
        'cidade_casou',
        'igreja_casou',
        'nome_mae',
        'numero_filhos',
        'profissao',
        'telefone',
        'email',
        'grau_instrucao',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'participa_igreja',
        'sacramento_batizado',
        'sacramento_eucaristia',
        'sacramento_crisma',
        'paroquia',
        'participa_pastoral',
        'quais_pastorais',
        'contato_familia_missa',
        'alimentacao_especial',
        'padrinho_madrinha_contato',
        'pagamento_confirmado',
        'pagamento_data',
        'pagamento_comprovante_base64',
    ];

    protected function casts(): array
    {
        return [
            'aceitou_termo' => 'boolean',
            'data_nascimento' => 'date',
            'data_casamento' => 'date',
            'numero_filhos' => 'integer',
            'sacramento_batizado' => 'boolean',
            'sacramento_eucaristia' => 'boolean',
            'sacramento_crisma' => 'boolean',
            'pagamento_confirmado' => 'boolean',
            'pagamento_data' => 'date',
            'finalizada_em' => 'datetime',
        ];
    }

    public static function getStatusDisponiveis(): array
    {
        return [
            self::STATUS_CANDIDATO,
            self::STATUS_DESISTENTE,
            self::STATUS_NEO,
            self::STATUS_CURSILHISTA,
        ];
    }
}