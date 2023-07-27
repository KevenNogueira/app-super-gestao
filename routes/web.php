<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');

Route::middleware('autencicacao')->prefix('/app')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('app.home');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');

    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::post('/fornecedor/consulta', [FornecedorController::class, 'listar'])->name('app.fornecedor.consulta');
    Route::get('/fornecedor/consulta', [FornecedorController::class, 'listar'])->name('app.fornecedor.consulta');
    Route::get('/fornecedor/cadastro', [FornecedorController::class, 'cadastro'])->name('app.fornecedor.cadastro');
    Route::post('/fornecedor/cadastro', [FornecedorController::class, 'cadastro'])->name('app.fornecedor.cadastro');
    Route::get('/fornecedor/editar/{id}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');

    Route::resource('produto', ProdutoController::class);

    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a> para ir para página inicial';
});
