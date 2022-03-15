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
use App\Http\Livewire\Academicas;
use App\Http\Livewire\Anexos;
use App\Http\Livewire\Anos;
use App\Http\Livewire\Aplicars;
use App\Http\Livewire\Bolsas;
use App\Http\Livewire\Candidatos;
use App\Http\Livewire\Contactos;
use App\Http\Livewire\Cotacaos;
use App\Http\Livewire\Cursos;
use App\Http\Livewire\DetalheParceiro;
use App\Http\Livewire\DetalheServico;
use App\Http\Livewire\FormDepoimento;
use App\Http\Livewire\FormParceiro;
use App\Http\Livewire\FormPoost;
use App\Http\Livewire\FormSlider;
use App\Http\Livewire\Formulario;
use App\Http\Livewire\Inicios;
use App\Http\Livewire\Inscricaos;
use App\Http\Livewire\Itemcurso;
use App\Http\Livewire\Itemcursos;
use App\Http\Livewire\Pacotes;
use App\Http\Livewire\Servicos;
use App\Http\Livewire\Sobres;
use App\Http\Livewire\Superiors;
use App\Http\Livewire\Traducaos;
use App\Http\Livewire\Wizard;
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


Route::get('/', Inicios::class);

/* Route::resource('bolsa', BolsaController::class);

Route::resource('ano', AnoController::class);

Route::resource('inscricao', InscricaoController::class);

Route::resource('curso', CursoController::class);

Route::resource('cotacao', CotacaoController::class);

Route::resource('traducao', TraducaoController::class);

Route::resource('servico', ServicoController::class);

Route::resource('aplicar', AplicarController::class);

Route::resource('sobre', SobreController::class); */

//Livewire
Route::get('bolsa', Bolsas::class);
Route::get('inicio', Inicios::class);
Route::get('ano', Anos::class);
Route::get('curso', Cursos::class);
Route::get('cotacao', Cotacaos::class);
Route::get('traducao', Traducaos::class);
Route::get('aplicar', Aplicars::class);
Route::get('servico', Servicos::class);
Route::get('sobre', Sobres::class);
Route::get('contacto', Contactos::class);

//Formulários
Route::get('formulario', Formulario::class);
Route::get('servico/{id}', DetalheServico::class);

Route::get('depoimentos', FormDepoimento::class);

Route::get('parceiros', FormParceiro::class);
Route::get('parceiro/{id}', DetalheParceiro::class);

Route::get('poosts', FormPoost::class);
Route::get('sliders', FormSlider::class);
Route::get('pacotes', Pacotes::class);
Route::get('cursos', Cursos::class);
Route::get('inscricaos', Inscricaos::class);
Route::get('itemcursos', Itemcursos::class);
Route::get('candidatos', Candidatos::class);

Route::get('academicas', Academicas::class);
Route::get('superiors', Superiors::class);
Route::get('anexos', Anexos::class);

Route::get('wizards', Wizard::class);