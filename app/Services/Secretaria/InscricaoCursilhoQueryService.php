<?php

declare(strict_types=1);

namespace App\Services\Secretaria;

use App\Models\InscricaoCursilho;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class InscricaoCursilhoQueryService
{
    /**
     * @return array<string, string>
     */
    public function resolveFilters(Request $request): array
    {
        $sort = (string) $request->query('sort', 'nome');
        $dir = strtolower((string) $request->query('dir', 'asc')) === 'desc' ? 'desc' : 'asc';
        $eventoId = trim((string) $request->query('evento_id', ''));
        $pagamento = trim((string) $request->query('pagamento', ''));
        $status = trim((string) $request->query('status', ''));

        if (! array_key_exists($sort, $this->sortMap())) {
            $sort = 'nome';
        }

        if (! in_array($pagamento, ['', 'confirmado', 'pendente'], true)) {
            $pagamento = '';
        }

        if ($eventoId !== '' && ! ctype_digit($eventoId)) {
            $eventoId = '';
        }

        if ($status !== '' && ! in_array($status, InscricaoCursilho::getStatusDisponiveis(), true)) {
            $status = '';
        }

        return [
            'q' => trim((string) $request->query('q', '')),
            'eventoId' => $eventoId,
            'status' => $status,
            'pagamento' => $pagamento,
            'sort' => $sort,
            'dir' => $dir,
        ];
    }

    /**
     * @param  array<string, string>  $filters
     * @return Builder<InscricaoCursilho>
     */
    public function build(array $filters): Builder
    {
        $sortColumn = $this->sortMap()[$filters['sort']] ?? 'inscricoes_cursilho.nome';

        return InscricaoCursilho::query()
            ->select('inscricoes_cursilho.*')
            ->with('evento:id,nome,numero')
            ->leftJoin('eventos', 'eventos.id', '=', 'inscricoes_cursilho.evento_id')
            ->when($filters['q'] !== '', function (Builder $query) use ($filters): void {
                $query->where(function (Builder $subQuery) use ($filters): void {
                    $like = '%'.$filters['q'].'%';

                    $subQuery->where('inscricoes_cursilho.nome', 'like', $like)
                        ->orWhere('inscricoes_cursilho.cpf', 'like', $like)
                        ->orWhere('inscricoes_cursilho.email', 'like', $like)
                        ->orWhere('inscricoes_cursilho.telefone', 'like', $like)
                        ->orWhere('eventos.nome', 'like', $like)
                        ->orWhere('eventos.numero', 'like', $like);
                });
            })
            ->when($filters['eventoId'] !== '', function (Builder $query) use ($filters): void {
                $query->where('inscricoes_cursilho.evento_id', (int) $filters['eventoId']);
            })
            ->when($filters['status'] !== '', function (Builder $query) use ($filters): void {
                $query->where('inscricoes_cursilho.status_ficha', $filters['status']);
            })
            ->when($filters['pagamento'] !== '', function (Builder $query) use ($filters): void {
                $query->where(
                    'inscricoes_cursilho.pagamento_confirmado',
                    $filters['pagamento'] === 'confirmado'
                );
            })
            ->orderBy($sortColumn, $filters['dir'])
            ->orderByDesc('inscricoes_cursilho.id');
    }

    /**
     * @return array<string, string>
     */
    private function sortMap(): array
    {
        return [
            'nome' => 'inscricoes_cursilho.nome',
            'cpf' => 'inscricoes_cursilho.cpf',
            'telefone' => 'inscricoes_cursilho.telefone',
            'email' => 'inscricoes_cursilho.email',
            'evento' => 'eventos.nome',
            'status_ficha' => 'inscricoes_cursilho.status_ficha',
            'pagamento_confirmado' => 'inscricoes_cursilho.pagamento_confirmado',
        ];
    }
}
