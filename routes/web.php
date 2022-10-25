<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/form', function () {
    return view('modulo.vista2');
})->name('form');*/

Route::resource('modulo', 'ModuloController', ['except' => ['show'] ]);
Route::resource('indicador', 'IndicadorController', ['except' => ['show'] ]);
Route::resource('item', 'ItemController', ['except' => ['show'] ]);
Route::resource('periodo', 'PeriodoController', ['except' => ['show'] ]);
Route::resource('evaluacion', 'EvaluacionController', ['except' => ['show'] ]);
