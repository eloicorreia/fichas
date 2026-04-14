<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;
use App\Models\InscricaoCursilho;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InscricaoCursilhoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = InscricaoCursilho::query();

        if ($request->filled('evento_id')) {
            $query->where('evento_id', (int) $request->input('evento_id'));
        }

        if ($request->filled('publico_evento')) {
            $query->where('publico_evento', trim((string) $request->input('publico_evento')));
        }

        if ($request->filled('numero_evento')) {
            $query->where('numero_evento', (int) $request->input('numero_evento'));
        }

        if ($request->filled('status_ficha')) {
            $query->where('status_ficha', trim((string) $request->input('status_ficha')));
        }

        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . trim((string) $request->input('nome')) . '%');
        }

        if ($request->filled('cpf')) {
            $query->where('cpf', trim((string) $request->input('cpf')));
        }

        $inscricoes = $query
            ->orderByDesc('id')
            ->paginate((int) $request->get('per_page', 15));

        return response()->json($inscricoes);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate($this->rules());

        $inscricao = InscricaoCursilho::create($validated);

        return response()->json([
            'message' => 'Inscrição criada com sucesso.',
            'data' => $inscricao,
        ], 201);
    }

    public function show(InscricaoCursilho $inscricaoCursilho): JsonResponse
    {
        return response()->json([
            'data' => $inscricaoCursilho,
        ]);
    }

    public function update(Request $request, InscricaoCursilho $inscricaoCursilho): JsonResponse
    {
        $validated = $request->validate($this->rules($inscricaoCursilho->id));

        $inscricaoCursilho->update($validated);

        return response()->json([
            'message' => 'Inscrição atualizada com sucesso.',
            'data' => $inscricaoCursilho->fresh(),
        ]);
    }

    public function destroy(InscricaoCursilho $inscricaoCursilho): JsonResponse
    {
        $inscricaoCursilho->delete();

        return response()->json([
            'message' => 'Inscrição removida com sucesso.',
        ]);
    }

    private function rules(?int $id = null): array
    {
        return [
            'evento_id' => ['required', 'integer', 'min:1'],
            'tipo_evento' => ['required', 'string', 'max:50'],
            'publico_evento' => ['required', 'string', 'max:30'],
            'numero_evento' => ['required', 'integer', 'min:1'],

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
                'size:14',
                Rule::unique('inscricoes_cursilho', 'cpf')
                    ->where(fn ($query) => $query->where('evento_id', request('evento_id')))
                    ->ignore($id),
            ],

            'data_casamento' => ['nullable', 'date'],
            'cidade_casou' => ['nullable', 'string', 'max:160'],
            'igreja_casou' => ['nullable', 'string', 'max:100'],

            'nome_mae' => ['required', 'string', 'max:160'],
            'numero_filhos' => ['nullable', 'integer', 'min:0', 'max:30'],
            'profissao' => ['nullable', 'string', 'max:120'],
            'telefone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:150'],
            'grau_instrucao' => ['nullable', 'string', 'max:40'],
            'cep' => ['required', 'string', 'size:9'],
            'endereco' => ['required', 'string', 'max:180'],
            'bairro' => ['required', 'string', 'max:120'],
            'cidade' => ['required', 'string', 'max:120'],
            'estado' => ['required', 'string', 'size:2'],
            'participa_igreja' => ['required', 'in:SIM,NAO'],

            'sacramento_batizado' => ['required', 'boolean'],
            'sacramento_eucaristia' => ['required', 'boolean'],
            'sacramento_crisma' => ['required', 'boolean'],

            'paroquia' => ['nullable', 'string', 'max:160'],
            'participa_pastoral' => ['nullable', 'in:SIM,NAO'],
            'quais_pastorais' => ['nullable', 'string'],

            'contato_familia_missa' => ['required', 'string'],
            'alimentacao_especial' => ['required', 'string'],
            'padrinho_madrinha_contato' => ['required', 'string'],

            'pagamento_confirmado' => ['required', 'boolean'],
            'pagamento_data' => ['nullable', 'date'],
            'pagamento_comprovante_base64' => ['nullable', 'string'],
        ];
    }
}