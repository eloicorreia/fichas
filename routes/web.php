<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fichas\CursilhoController;
use App\Http\Controllers\Fichas\AssembleiaController;
use App\Http\Controllers\Cadastros\MunicipioController;
use App\Http\Controllers\Secretaria\Auth\LoginController;
use App\Http\Controllers\Secretaria\DashboardController;
use App\Http\Controllers\Secretaria\EventoController;
use App\Http\Controllers\Secretaria\PermissionController;
use App\Http\Controllers\Secretaria\RoleController;
use App\Http\Controllers\Secretaria\SecurityUserController;
use App\Http\Controllers\Secretaria\UserRoleController;

Route::get('/fichas/autocomplete/municipios', [MunicipioController::class, 'autocomplete'])
    ->name('municipios.autocomplete');

Route::prefix('/fichas/cursilho/{publicoEvento}')
    ->whereIn('publicoEvento', ['homens', 'mulheres', 'jovens'])
    ->group(function () {

        /*
         * Entrada pública:
         * /cursilho/homens
         * /cursilho/mulheres
         * /cursilho/jovens
         *
         * O controller resolve o primeiro evento CURSILHO
         * ativo + aberto, ordenado pelo menor id.
         */
        Route::get('/', [CursilhoController::class, 'startByPublico'])
            ->name('cursilho.start_by_publico');


        Route::get('/inscricaoconfirmada', [CursilhoController::class, 'inscricaoConfirmada'])
            ->name('cursilho.inscricaoconfirmada');

        /*
         * Rota canônica do evento:
         * /cursilho/mulheres/109
         * /cursilho/homens/72
         * /cursilho/jovens/12
         */
        Route::prefix('{numero}')
            ->whereNumber('numero')
            ->group(function () {

                Route::get('/', [CursilhoController::class, 'start'])
                    ->name('cursilho.start');

                for ($i = 1; $i <= 6; $i++) {
                    Route::get("passo/$i", [CursilhoController::class, 'step'])
                        ->name("cursilho.passo.$i");

                    Route::post("passo/$i", [CursilhoController::class, 'storeStep'])
                        ->name("cursilho.passo.$i.store");
                }

                Route::get('revisao', [CursilhoController::class, 'review'])
                    ->name('cursilho.revisao');

                Route::post('finalizar', [CursilhoController::class, 'finish'])
                    ->name('cursilho.finalizar');
            });
    });

/*
 * Entrada pública:
 * /fichas/assembleia
 *
 * O controller resolve o primeiro evento ASSEMBLEIA
 * ativo + aberto, ordenado pelo menor numero.
 * Se não encontrar, deve redirecionar para /fichas/naodisponivel.
 */
Route::prefix('/fichas/assembleia')
    ->group(function () {

        Route::get('/', [AssembleiaController::class, 'start'])
            ->name('assembleia.start');

        /*
         * Rota canônica do evento:
         * /fichas/assembleia/2026
         */
        Route::prefix('{numero}')
            ->whereNumber('numero')
            ->group(function () {

                Route::get('/', [AssembleiaController::class, 'show'])
                    ->name('assembleia.show');

                Route::get('passo/1', [AssembleiaController::class, 'step'])
                    ->defaults('step', 1)
                    ->name('assembleia.passo.1');

                Route::post('passo/1', [AssembleiaController::class, 'storeStep'])
                    ->defaults('step', 1)
                    ->name('assembleia.passo.1.store');

                Route::get('passo/2', [AssembleiaController::class, 'step'])
                    ->defaults('step', 2)
                    ->name('assembleia.passo.2');

                Route::post('passo/2', [AssembleiaController::class, 'storeStep'])
                    ->defaults('step', 2)
                    ->name('assembleia.passo.2.store');

                Route::get('revisao', [AssembleiaController::class, 'review'])
                    ->name('assembleia.revisao');

                Route::post('finalizar', [AssembleiaController::class, 'finish'])
                    ->name('assembleia.finalizar');

                Route::get('finalizado', [AssembleiaController::class, 'finalizado'])
                    ->name('assembleia.finalizado');
            });
    });

Route::prefix('secretaria')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])
        ->name('secretaria.login');

    Route::post('/login', [LoginController::class, 'store'])
        ->name('secretaria.login.attempt');

    Route::get('/esqueci-minha-senha', [LoginController::class, 'forgotPassword'])
        ->name('secretaria.password.request');

    Route::post('/esqueci-minha-senha', [LoginController::class, 'sendResetLink'])
        ->name('secretaria.password.email');

    Route::middleware(['auth', 'role:secretaria,super-admin', 'permission:dashboard.view'])
        ->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])
                ->name('secretaria.dashboard');

            Route::post('/logout', [LoginController::class, 'destroy'])
                ->name('secretaria.logout');
        });

    Route::middleware(['auth', 'role:secretaria,super-admin', 'permission:evento.view'])
        ->prefix('eventos')
        ->name('secretaria.eventos.')
        ->group(function () {
            Route::get('/', [EventoController::class, 'index'])
                ->name('index');

            Route::get('/criar', [EventoController::class, 'create'])
                ->name('create');

            Route::post('/', [EventoController::class, 'store'])
                ->name('store');

            Route::get('/{evento}/editar', [EventoController::class, 'edit'])
                ->name('edit');

            Route::put('/{evento}', [EventoController::class, 'update'])
                ->name('update');
        });

    Route::middleware(['auth', 'role:super-admin', 'permission:role.view'])
        ->prefix('roles')
        ->name('secretaria.roles.')
        ->group(function () {
            Route::get('/', [RoleController::class, 'index'])
                ->name('index');

            Route::get('/criar', [RoleController::class, 'create'])
                ->name('create');

            Route::post('/', [RoleController::class, 'store'])
                ->name('store');

            Route::get('/{role}/editar', [RoleController::class, 'edit'])
                ->name('edit');

            Route::put('/{role}', [RoleController::class, 'update'])
                ->name('update');

            Route::delete('/{role}', [RoleController::class, 'destroy'])
                ->name('destroy');
        });

    Route::middleware(['auth', 'role:super-admin', 'permission:permission.view'])
        ->prefix('permissoes')
        ->name('secretaria.permissions.')
        ->group(function () {
            Route::get('/', [PermissionController::class, 'index'])->name('index');
            Route::get('/criar', [PermissionController::class, 'create'])->name('create');
            Route::post('/', [PermissionController::class, 'store'])->name('store');
            Route::get('/{permission}/editar', [PermissionController::class, 'edit'])->name('edit');
            Route::put('/{permission}', [PermissionController::class, 'update'])->name('update');
            Route::delete('/{permission}', [PermissionController::class, 'destroy'])->name('destroy');
        });

    Route::middleware(['auth', 'role:super-admin', 'permission:usuario.view'])
        ->prefix('usuarios')
        ->name('secretaria.users.')
        ->group(function () {
            Route::get('/', [SecurityUserController::class, 'index'])->name('index');
            Route::get('/{user}/papeis', [UserRoleController::class, 'edit'])->name('roles.edit');
            Route::put('/{user}/papeis', [UserRoleController::class, 'update'])->name('roles.update');
        });        
});    