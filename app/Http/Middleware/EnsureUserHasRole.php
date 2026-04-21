<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Trata a requisição recebida e garante que o usuário autenticado
     * possua ao menos um dos papéis exigidos.
     *
     * Exemplo de uso:
     * - middleware('role:secretaria')
     * - middleware('role:super-admin,secretaria')
     *
     * @param  array<int, string>  ...$roles
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (!$user) {
            abort(401);
        }

        if (empty($roles)) {
            abort(500, 'Nenhum papel foi informado para o middleware de role.');
        }

        if (!$user->hasAnyRole($roles)) {
            abort(403);
        }

        return $next($request);
    }
}