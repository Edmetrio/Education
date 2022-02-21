<?php

use App\Http\Controllers\AnoController;
use App\Http\Controllers\AplicarController;
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\PessoalController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TraducaoController;
use App\Http\Livewire\Bolsas;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [DashboardController::class, 'index']);

Route::resource('bolsa', BolsaController::class);

Route::resource('ano', AnoController::class);

Route::resource('inscricao', InscricaoController::class);

Route::resource('curso', CursoController::class);

Route::resource('cotacao', CotacaoController::class);

Route::resource('traducao', TraducaoController::class);

Route::resource('servico', ServicoController::class);

Route::resource('aplicar', AplicarController::class);

Route::resource('sobre', SobreController::class);

Route::get('bolsas', Bolsas::class);

Route::get('tradutor', [DashboardController::class, 'teacher']);

Route::get('online', [DashboardController::class, 'online']);

Route::get('fundacao', [DashboardController::class, 'fundacao']);

Route::Resource('pessoal', PessoalController::class);

Route::get('academico', [PessoalController::class, 'academico']);

Route::get('superior', [PessoalController::class, 'superior']);

Route::get('anexo', [PessoalController::class, 'anexo']);