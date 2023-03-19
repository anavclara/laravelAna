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
