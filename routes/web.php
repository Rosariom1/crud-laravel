<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', [App\Http\Controllers\ContatosController::class, 'show'])->name('listar_contatos');
Route::get('/salvar', [App\Http\Controllers\ContatosController::class, 'create'])->name('criar_contatos');
Route::post('/cadastrar/contatos', [App\Http\Controllers\ContatosController::class, 'store'])->name('salvar_contatos');
Route::get('/eliminar/delete/{id}', [App\Http\Controllers\ContatosController::class, 'destroy'])->name('eliminar_contatos');
Route::get('/editar/edit/{id}', [App\Http\Controllers\ContatosController::class, 'edit'])->name('editar_contatos');
Route::post('/editar/edit/{id}', [App\Http\Controllers\ContatosController::class, 'update'])->name('actualizar_contatos');
