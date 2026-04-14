<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;
use App\Models\Municipio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MunicipioController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Municipio::query();

        if ($request->filled('nome_municipio')) {
            $query->where(
                'nome_municipio',
                'like',
                '%' . trim((string) $request->input('nome_municipio')) . '%'
            );
        }

        if ($request->filled('uf')) {
            $query->where('uf', mb_strtoupper(trim((string) $request->input('uf')), 'UTF-8'));
        }

        $municipio = $query
            ->orderBy('nome_municipio')
            ->orderBy('uf')
            ->paginate((int) $request->get('per_page', 15));

        return response()->json($municipio);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate($this->rules());

        $validated['nome_municipio'] = trim((string) $validated['nome_municipio']);
        $validated['uf'] = mb_strtoupper(trim((string) $validated['uf']), 'UTF-8');

        $municipio = Municipio::create($validated);

        return response()->json([
            'message' => 'Município cadastrado com sucesso.',
            'data' => $municipio,
        ], 201);
    }

    public function show(Municipio $municipio): JsonResponse
    {
        return response()->json([
            'data' => $municipio,
        ]);
    }

    public function update(Request $request, Municipio $municipio): JsonResponse
    {
        $validated = $request->validate($this->rules($municipio->id));

        $validated['nome_municipio'] = trim((string) $validated['nome_municipio']);
        $validated['uf'] = mb_strtoupper(trim((string) $validated['uf']), 'UTF-8');

        $municipio->update($validated);

        return response()->json([
            'message' => 'Município atualizado com sucesso.',
            'data' => $municipio->fresh(),
        ]);
    }

    public function destroy(Municipio $municipio): JsonResponse
    {
        $municipio->delete();

        return response()->json([
            'message' => 'Município removido com sucesso.',
        ]);
    }

    public function autocomplete(Request $request): JsonResponse
    {
        $termo = trim((string) $request->get('q', ''));

        $query = Municipio::query();

        if ($termo !== '') {
            $query->where(function ($subQuery) use ($termo) {
                $subQuery->where('nome_municipio', 'like', '%' . $termo . '%')
                    ->orWhereRaw(
                        "concat(nome_municipio, '/', uf) like ?",
                        ['%' . $termo . '%']
                    );
            });
        }

        if ($request->filled('uf')) {
            $query->where('uf', mb_strtoupper(trim((string) $request->input('uf')), 'UTF-8'));
        }

        $municipio = $query
            ->orderBy('nome_municipio')
            ->orderBy('uf')
            ->limit((int) $request->get('limit', 20))
            ->get()
            ->map(function (Municipio $municipio) {
                return [
                    'id' => $municipio->id,
                    'id_municipio' => $municipio->id_municipio,
                    'nome_municipio' => $municipio->nome_municipio,
                    'uf' => $municipio->uf,
                    'label' => $municipio->nome_municipio . '/' . $municipio->uf,
                    'value' => $municipio->nome_municipio . '/' . $municipio->uf,
                ];
            })
            ->values();

        return response()->json([
            'data' => $municipio,
        ]);
    }

    private function rules(?int $id = null): array
    {
        return [
            'id_municipio' => [
                'required',
                'integer',
                'min:1',
                Rule::unique('municipio', 'id_municipio')->ignore($id),
            ],
            'nome_municipio' => [
                'required',
                'string',
                'min:2',
                'max:150',
            ],
            'uf' => [
                'required',
                'string',
                'size:2',
            ],
        ];
    }
}