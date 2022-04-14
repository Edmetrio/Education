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
use App\Http\Livewire\Actividades;
use App\Http\Livewire\Anexos;
use App\Http\Livewire\Anos;
use App\Http\Livewire\Aplicars;
use App\Http\Livewire\Bolsas;
use App\Http\Livewire\Candidatos;
use App\Http\Livewire\Comentario;
use App\Http\Livewire\Contactos;
use App\Http\Livewire\Contas;
use App\Http\Livewire\Cotacaos;
use App\Http\Livewire\Cursos;
use App\Http\Livewire\Detalhedepoimento;
use App\Http\Livewire\DetalheParceiro;
use App\Http\Livewire\DetalheServico;
use App\Http\Livewire\Detalheslider;
use App\Http\Livewire\FormDepoimento;
use App\Http\Livewire\FormParceiro;
use App\Http\Livewire\FormPoost;
use App\Http\Livewire\Formresumo;
use App\Http\Livewire\FormSlider;
use App\Http\Livewire\Formulario;
use App\Http\Livewire\Inicios;
use App\Http\Livewire\Inscricaos;
use App\Http\Livewire\Itemcurso;
use App\Http\Livewire\Itemcursos;
use App\Http\Livewire\Pacotes;
use App\Http\Livewire\Perfils;
use App\Http\Livewire\Permissaos;
use App\Http\Livewire\Rotas;
use App\Http\Livewire\Servicos;
use App\Http\Livewire\Sobres;
use App\Http\Livewire\Superiors;
use App\Http\Livewire\Traducaos;
use App\Http\Livewire\Users;
use App\Http\Livewire\Wizard;
use App\Models\Models\Depoimento;
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


Route::get('/dashboard', Inicios::class);

require __DIR__ . '/auth.php';

/*
Route::resource('inscricao', InscricaoController::class);

Route::resource('curso', CursoController::class);

Route::resource('cotacao', CotacaoController::class);

Route::resource('traducao', TraducaoController::class);

Route::resource('servico', ServicoController::class);

Route::resource('aplicar', AplicarController::class);

Route::resource('sobre', SobreController::class); */

//Livewire
Route::get('bolsa', Bolsas::class)->name('bolsa');
Route::get('/', Inicios::class)->name('/');
Route::get('inicio', Inicios::class)->name('inicio');
Route::get('ano', Anos::class)->name('ano');
Route::get('curso', Cursos::class)->name('curso');
Route::get('cotacao', Cotacaos::class)->name('cotacao');
Route::get('traducao', Traducaos::class)->name('traducao');
Route::get('aplicar', Aplicars::class)->name('aplicar');
Route::get('servico', Servicos::class)->name('servico');
Route::get('sobre', Sobres::class)->name('sobre');
Route::get('contacto', Contactos::class)->name('contacto');

//Formulários
Route::get('servico/{id}', DetalheServico::class)->name('servico');

Route::get('depoimentos', FormDepoimento::class)->name('depoimentos');
Route::get('parceiros', FormParceiro::class)->name('parceiros');
Route::get('parceiro/{id}', DetalheParceiro::class)->name('parceiro');
Route::get('comentarios', Comentario::class)->name('comentarios');
Route::get('depoimento/{id}', Detalhedepoimento::class)->name('depoimento');
Route::get('candidatos/{id}', Candidatos::class)->name('candidatos');
Route::get('sliders/{id}', Detalheslider::class)->name('sliders');

Route::group(['middleware' => ['auth', 'accessrole']], function () {
    Route::get('actividades', Actividades::class)->name('actividades');
    Route::get('resumo', Formresumo::class)->name('resumo');
    Route::get('poosts', FormPoost::class)->name('poosts');
    Route::get('sliders', FormSlider::class)->name('sliders');
    Route::get('formulario', Formulario::class)->name('formulario');
    Route::get('pacotes', Pacotes::class)->name('pacotes');
    Route::get('cursos', Cursos::class)->name('cursos');
    Route::get('inscricaos', Inscricaos::class)->name('inscricaos');
    Route::get('itemcursos', Itemcursos::class)->name('itemcursos');
    Route::get('users', Users::class)->name('users');
    Route::get('permissaos', Permissaos::class)->name('permissaos');
});
Route::get('rotas', Rotas::class)->name('rotas');
Route::get('contas', Contas::class)->name('contas')->middleware();
Route::get('comentarios/{id}', Comentario::class)->name('comentarios');


/* Route::get('academicas', Academicas::class)->name('academicas');
Route::get('superiors', Superiors::class)->name('superiors');
Route::get('anexos', Anexos::class)->name('anexos'); */


Route::get('perfils', Perfils::class)->name('perfils');
