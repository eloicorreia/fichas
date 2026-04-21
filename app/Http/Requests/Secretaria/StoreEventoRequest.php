<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use App\Models\Evento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEventoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:150'],
            'tipo_evento' => ['required', 'string', Rule::in(Evento::getTiposEvento())],
            'publico_evento' => ['required', 'string', Rule::in(Evento::getPublicosEvento())],
            'numero' => ['required', 'integer', 'min:1', 'max:999999', 'unique:eventos,numero'],
            'coordenador_nome' => ['nullable', 'string', 'max:150'],
            'tesoureiro_nome' => ['nullable', 'string', 'max:150'],
            'status' => ['required', 'string', Rule::in(Evento::getStatusDisponiveis())],
            'ativo' => ['required', 'boolean'],
            'inicio_em' => ['required', 'date'],
            'termino_em' => ['required', 'date', 'after_or_equal:inicio_em'],
            'aceita_inscricoes_ate' => ['nullable', 'date'],
            'janela_chegada_inicio' => ['nullable', 'date'],
            'janela_chegada_fim' => ['nullable', 'date', 'after_or_equal:janela_chegada_inicio'],
            'valor_contribuicao' => ['nullable', 'numeric', 'min:0'],
            'pix_chave' => ['nullable', 'string', 'max:160'],
            'pix_banco' => ['nullable', 'string', 'max:120'],
            'pix_favorecido' => ['nullable', 'string', 'max:160'],
            'comprovante_whatsapp' => ['nullable', 'string', 'max:20'],
            'comprovante_responsavel' => ['nullable', 'string', 'max:150'],
            'logradouro' => ['nullable', 'string', 'max:180'],
            'numero_endereco' => ['nullable', 'string', 'max:20'],
            'complemento' => ['nullable', 'string', 'max:120'],
            'bairro' => ['nullable', 'string', 'max:120'],
            'cidade' => ['nullable', 'string', 'max:120'],
            'uf' => ['nullable', 'string', 'size:2'],
            'cep' => ['nullable', 'string', 'max:9'],
            'dias' => ['nullable', 'string', 'max:100'],
            'limite_inscricoes' => ['nullable', 'integer', 'min:0'],
            'descricao_publica_curta' => ['nullable', 'string', 'max:255'],
            'orientacoes_participante' => ['nullable', 'string'],
            'encerramento_info' => ['nullable', 'string'],
            'informacoes_finais' => ['nullable', 'string'],
            'observacoes_internas' => ['nullable', 'string'],
            'inicio_descricao' => ['nullable', 'string', 'max:100'],
            'final_descricao' => ['nullable', 'string', 'max:100'],
        ];
    }
}