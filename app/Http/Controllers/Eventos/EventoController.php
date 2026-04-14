<?php

namespace App\Http\Controllers\Eventos;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Evento::query();

        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . trim((string) $request->string('nome')) . '%');
        }

        if ($request->filled('tipo_evento')) {
            $query->where('tipo_evento', $request->string('tipo_evento'));
        }

        if ($request->filled('publico_evento')) {
            $query->where('publico_evento', $request->string('publico_evento'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }

        if ($request->has('ativo') && $request->get('ativo') !== '') {
            $query->where('ativo', filter_var($request->get('ativo'), FILTER_VALIDATE_BOOL));
        }

        $eventos = $query
            ->orderByDesc('inicio_em')
            ->orderByDesc('id')
            ->paginate((int) $request->get('per_page', 15));

        return response()->json($eventos);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate($this->rules());

        $evento = Evento::create($validated);

        return response()->json([
            'message' => 'Evento cadastrado com sucesso.',
            'data' => $evento,
        ], 201);
    }

    public function show(Evento $evento): JsonResponse
    {
        return response()->json([
            'data' => $evento,
        ]);
    }

    public function update(Request $request, Evento $evento): JsonResponse
    {
        $validated = $request->validate($this->rules($evento->id));

        $evento->update($validated);

        return response()->json([
            'message' => 'Evento atualizado com sucesso.',
            'data' => $evento->fresh(),
        ]);
    }

    public function destroy(Evento $evento): JsonResponse
    {
        $evento->delete();

        return response()->json([
            'message' => 'Evento removido com sucesso.',
        ]);
    }

    private function rules(?int $eventoId = null): array
    {
        return [
            'nome' => ['required', 'string', 'min:3', 'max:150'],

            'tipo_evento' => [
                'required',
                'string',
                Rule::in(Evento::getTiposEvento()),
            ],

            'publico_evento' => [
                'required',
                'string',
                Rule::in(Evento::getPublicosEvento()),
            ],

            'numero' => [
                'required',
                'integer',
                'min:1',
                Rule::unique('eventos')
                    ->where(function ($query) {
                        return $query
                            ->where('tipo_evento', request('tipo_evento'))
                            ->where('publico_evento', request('publico_evento'));
                    })
                    ->ignore($eventoId),
            ],

            'coordenador_nome' => ['nullable', 'string', 'max:150'],
            'tesoureiro_nome' => ['nullable', 'string', 'max:150'],

            'status' => [
                'required',
                'string',
                Rule::in(Evento::getStatusDisponiveis()),
            ],

            'ativo' => ['required', 'boolean'],

            'inicio_em' => ['required', 'date'],
            'termino_em' => ['required', 'date', 'after_or_equal:inicio_em'],
            'aceita_inscricoes_ate' => ['nullable', 'date', 'before_or_equal:inicio_em'],

            'janela_chegada_inicio' => ['nullable', 'date'],
            'janela_chegada_fim' => ['nullable', 'date', 'after_or_equal:janela_chegada_inicio'],

            'valor_contribuicao' => ['nullable', 'numeric', 'min:0'],

            'pix_chave' => ['nullable', 'string', 'max:160'],
            'pix_banco' => ['nullable', 'string', 'max:120'],
            'pix_favorecido' => ['nullable', 'string', 'max:160'],
            'pix_qr_code_path' => ['nullable', 'string', 'max:255'],
            'comprovante_whatsapp' => ['nullable', 'string', 'max:20'],
            'comprovante_responsavel' => ['nullable', 'string', 'max:150'],

            'logradouro' => ['nullable', 'string', 'max:180'],
            'numero_endereco' => ['nullable', 'string', 'max:20'],
            'complemento' => ['nullable', 'string', 'max:120'],
            'bairro' => ['nullable', 'string', 'max:120'],
            'cidade' => ['nullable', 'string', 'max:120'],
            'uf' => ['nullable', 'string', 'size:2'],
            'cep' => ['nullable', 'string', 'max:9'],

            'limite_inscricoes' => ['nullable', 'integer', 'min:1'],

            'descricao_publica_curta' => ['nullable', 'string', 'max:255'],
            'orientacoes_participante' => ['nullable', 'string'],
            'encerramento_info' => ['nullable', 'string'],
            'informacoes_finais' => ['nullable', 'string'],
            'observacoes_internas' => ['nullable', 'string'],
        ];
    }
}