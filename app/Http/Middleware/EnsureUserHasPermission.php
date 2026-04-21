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
     */
    public function handle(
        Request $request,
        Closure $next,
        string $permission
    ): Response {
        $user = $request->user();

        if (!$user) {
            abort(401);
        }

        if (blank($permission)) {
            abort(500, 'Nenhuma permissão foi informada para o middleware de permission.');
        }

        if (!$user->hasPermission($permission)) {
            abort(403);
        }

        return $next($request);
    }
}