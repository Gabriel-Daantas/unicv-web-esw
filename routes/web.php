<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/novo', [UsuariosController::class, 'create']);
Route::get('usuarios/editar/{id}', [UsuariosController::class, 'edit']);
Route::get('usuarios/excluir/{id}', [UsuariosController::class, 'destroy']);
Route::get('usuarios/{id}', [UsuariosController::class, 'show']);
Route::post('usuarios/gravar/{id}', [UsuariosController::class, 'update']);
Route::post('usuarios/salvar', [UsuariosController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
