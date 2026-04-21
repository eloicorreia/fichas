<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use App\Models\InscricaoCursilho;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEventoInscricaoRequest extends FormRequest
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
            'status_ficha' => [
                'required',
                'string',
                Rule::in(InscricaoCursilho::getStatusDisponiveis()),
            ],
            'aceitou_termo' => ['required', 'boolean'],
            'finalizada_em' => ['nullable', 'date'],
            'nome' => ['required', 'string', 'max:255'],
            'data_nascimento' => ['nullable', 'date'],
            'estado_civil' => ['nullable', 'string', 'max:100'],
            'cpf' => ['nullable', 'string', 'max:20'],
            'data_casamento' => ['nullable', 'date'],
            'cidade_casou' => ['nullable', 'string', 'max:150'],
            'igreja_casou' => ['nullable', 'string', 'max:150'],
            'nome_mae' => ['nullable', 'string', 'max:255'],
            'numero_filhos' => ['nullable', 'integer', 'min:0'],
            'profissao' => ['nullable', 'string', 'max:150'],
            'telefone' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:255'],
            'grau_instrucao' => ['nullable', 'string', 'max:150'],
            'cep' => ['nullable', 'string', 'max:12'],
            'endereco' => ['nullable', 'string', 'max:255'],
            'bairro' => ['nullable', 'string', 'max:150'],
            'cidade' => ['nullable', 'string', 'max:150'],
            'estado' => ['nullable', 'string', 'max:2'],
            'participa_igreja' => ['nullable', 'string', 'max:255'],
            'sacramento_batizado' => ['nullable', 'boolean'],
            'sacramento_eucaristia' => ['nullable', 'boolean'],
            'sacramento_crisma' => ['nullable', 'boolean'],
            'paroquia' => ['nullable', 'string', 'max:150'],
            'participa_pastoral' => ['nullable', 'string', 'max:255'],
            'quais_pastorais' => ['nullable', 'string'],
            'contato_familia_missa' => ['nullable', 'string'],
            'alimentacao_especial' => ['nullable', 'string'],
            'padrinho_madrinha_contato' => ['nullable', 'string'],
            'pagamento_confirmado' => ['nullable', 'boolean'],
            'pagamento_data' => ['nullable', 'date'],
            'pagamento_comprovante_base64' => ['nullable', 'string'],
        ];
    }
}