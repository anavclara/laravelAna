<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// ----------------PRODUTO INICIO----------------

Route::get('/produto', [ProdutoController::class, 'index'])
->name('produto.index');

// EXIBIR O FORMULÁRIO 
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

// SALVAR O FORMUÁRIO
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto.store');


Route::get('/produto/{id}', [ProdutoController::class, 'show'])
->name('produto.show');

//EXIBE O FORMULARIO COM OS DADOS DO RECURSO
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

// ATUALIZA OS DADOS DO RECURSO PASSANDO PELO FORMULÁRIO
Route::put('/produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update');

//DESTROY
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy');

// ----------------PRODUTO FIM----------------

// ----------------CATEGORIA INICIO--------------
// EXIBIR O FORMULÁRIO 
Route::get('/categoria', [CategoriaController::class, 'index'])
->name('categoria.index');

// EDITAR
// exibe o formulário com os dados do recurso
Route::get('/categoria/create', [CategoriaController::class, 'create'])
->name('categoria.create');

// SALVAR O FORMUÁRIO
Route::post('/categoria/create', [CategoriaController::class, 'store'])
->name('categoria.store');


Route::get('/categoria/{id}', [CategoriaController::class, 'show'])
->name('categoria.show');

//EXIBE O FORMULARIO COM OS DADOS DO RECURSO
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])
->name('categoria.edit');

// ATUALIZA OS DADOS DO RECURSO PASSANDO PELO FORMULÁRIO
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])
->name('categoria.update');

//DESTRUIR
Route::delete('/categoria/{id}', [categoriaController::class, 'destroy'])
->name('categoria.destroy');


// ----------------CATEGORIA FIM----------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
