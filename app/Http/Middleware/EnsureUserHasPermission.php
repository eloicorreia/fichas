<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasPermission
{
    /**
     * Trata a requisição recebida e garante que o usuário autenticado
     * possua a permissão exigida.
     *
     * Exemplo de uso:
     * - middleware('permission:evento.view')
     * - middleware('permission:inscricao.create,inscricao.review')
     */
    public function handle(
        Request $request,
        Closure $next,
        string ...$permissions
    ): Response {
        $user = $request->user();

        if (! $user) {
            abort(401);
        }

        $permissions = array_filter($permissions, fn (string $permission): bool => filled($permission));

        if ($permissions === []) {
            abort(500, 'Nenhuma permissão foi informada para o middleware de permission.');
        }

        foreach ($permissions as $permission) {
            if ($user->hasPermission($permission)) {
                return $next($request);
            }
        }

        abort(403);
    }
}
