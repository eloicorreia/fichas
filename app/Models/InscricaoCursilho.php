<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    public function getTelefoneFormatadoAttribute(): ?string
    {
        if (! $this->telefone) {
            return null;
        }

        $digits = preg_replace('/\D+/', '', $this->telefone);

        if (! is_string($digits) || $digits === '') {
            return $this->telefone;
        }

        if (strlen($digits) === 11) {
            return preg_replace(
                '/^(\d{2})(\d{5})(\d{4})$/',
                '($1) $2-$3',
                $digits
            ) ?: $this->telefone;
        }

        if (strlen($digits) === 10) {
            return preg_replace(
                '/^(\d{2})(\d{4})(\d{4})$/',
                '($1) $2-$3',
                $digits
            ) ?: $this->telefone;
        }

        return $this->telefone;
    }

    public function getPagamentoStatusAttribute(): string
    {
        return $this->pagamento_confirmado ? 'Confirmado' : 'Pendente';
    }

    public function getEventoLabelAttribute(): string
    {
        if ($this->evento) {
            if ($this->evento->numero) {
                return $this->evento->numero.' - '.$this->evento->nome;
            }

            return $this->evento->nome;
        }

        if ($this->numero_evento || $this->tipo_evento) {
            return collect([$this->numero_evento, $this->tipo_evento ?: 'Evento'])
                ->filter()
                ->implode(' - ');
        }

        return '-';
    }
}
