<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fichas\CursilhoController;
use App\Http\Controllers\Fichas\AssembleiaController;
use App\Http\Controllers\Cadastros\MunicipioController;

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