<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get(
    '/produto', [ProdutoController::class, 'index']
)->name('produto.index');


// EXIBIR O FORMULÁRIO 

Route::get(
    '/produto/create', [ProdutoController::class, 'create']
)->name('produto.create');

// SALVAR O FORMUÁRIO

Route::post(
    '/produto/create', [ProdutoController::class, 'store']
)->name('produto.store');

Route::get(
    '/produto/{id}', [ProdutoController::class, 'show']
)->name('produto.show');

//EXIBE O FORMULARIO COM OS DADOS DO RECURSO

Route::get(
    '/produto/{id}/edit', [ProdutoController::class, 'edit']
)->name('produto.edit');

// ATUALIZA OS DADOS DO RECURSO PASSANDO PELO FORMULÁRIO

Route::put(
    '/produto/{id}/edit', [ProdutoController::class, 'update']
)->name('produto.update');

// DESTROY
Route::delete(
    '/produto/{id}', [ProdutoController::class, 'destroy']
)->name('produto.destroy');

