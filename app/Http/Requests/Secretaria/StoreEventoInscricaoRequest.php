<?php

declare(strict_types=1);

namespace App\Http\Requests\Secretaria;

use App\Models\InscricaoCursilho;
use App\Rules\CpfValido;
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
        $evento = $this->route('evento');
        $inscricao = $this->route('inscricao');
        $cpfNormalizado = preg_replace('/\D+/', '', (string) $this->input('cpf'));

        return [
            'status_ficha' => [
                'required',
                'string',
                Rule::in(InscricaoCursilho::getStatusDisponiveis()),
            ],
            'aceitou_termo' => ['required', 'boolean'],
            'finalizada_em' => ['nullable', 'date'],
            'nome' => ['required', 'string', 'max:120'],
            'data_nascimento' => ['required', 'date'],
            'estado_civil' => ['required', 'string', 'max:20'],
            'cpf' => [
                'required',
                'string',
                'max:14',
                new CpfValido,
                function (string $attribute, mixed $value, \Closure $fail) use ($cpfNormalizado, $evento, $inscricao): void {
                    if ($cpfNormalizado === '') {
                        $fail('CPF inválido.');

                        return;
                    }

                    $duplicada = InscricaoCursilho::withTrashed()
                        ->where('evento_id', $evento?->id)
                        ->where('cpf_normalizado', $cpfNormalizado)
                        ->when($inscricao, fn ($query) => $query->whereKeyNot($inscricao->id))
                        ->first();

                    if ($duplicada?->trashed()) {
                        $fail('Já existe uma inscrição excluída para este CPF neste evento. Acesse a listagem do evento, filtre por Excluídas e restaure a inscrição existente.');

                        return;
                    }

                    if ($duplicada !== null) {
                        $fail('Já existe uma inscrição para este CPF neste evento.');
                    }
                },
            ],
            'data_casamento' => ['nullable', 'date'],
            'cidade_casou' => ['nullable', 'string', 'max:160'],
            'igreja_casou' => ['nullable', 'string', 'max:100'],
            'nome_mae' => ['required', 'string', 'max:160'],
            'numero_filhos' => ['nullable', 'integer', 'min:0'],
            'profissao' => ['nullable', 'string', 'max:120'],
            'telefone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:150'],
            'grau_instrucao' => ['nullable', 'string', 'max:40'],
            'cep' => ['required', 'string', 'max:9'],
            'endereco' => ['required', 'string', 'max:180'],
            'bairro' => ['required', 'string', 'max:120'],
            'cidade' => ['required', 'string', 'max:120'],
            'estado' => ['required', 'string', 'size:2'],
            'participa_igreja' => ['required', 'string', 'max:3'],
            'sacramento_batizado' => ['nullable', 'boolean'],
            'sacramento_eucaristia' => ['nullable', 'boolean'],
            'sacramento_crisma' => ['nullable', 'boolean'],
            'paroquia' => ['nullable', 'string', 'max:160'],
            'participa_pastoral' => ['nullable', 'string', 'max:3'],
            'quais_pastorais' => ['nullable', 'string'],
            'contato_familia_missa' => ['required', 'string'],
            'alimentacao_especial' => ['required', 'string'],
            'padrinho_madrinha_contato' => ['required', 'string'],
        ];
    }
}
