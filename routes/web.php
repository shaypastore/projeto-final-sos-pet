<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\UsuariosController;

Route::get('/', [IndexController::class, 'index'])->name('inicio');

//----------------------------Ocorrências---------------------------------
Route::get('/ocorrencia', [OcorrenciaController::class, 'index'])->name('ocorencia');
Route::get('/ocorrencia/criar', [OcorrenciaController::class, 'criar'])->name('ocorrencia/criar');
Route::post('/ocorrencia/criar', [OcorrenciaController::class, 'inserir'])->name('ocorrencia/inserir');
Route::get('/ocorrencia/ver/{ocor}', [OcorrenciaController::class, 'ver'])->name('ocorrencia/ver');
Route::get('/ocorrencia/editar/{ocor}', [OcorrenciaController::class, 'editar'])->name('ocorrencia/editar');
Route::put('/ocorrencia/editar/{ocor}', [OcorrenciaController::class, 'editarGravar']);

//----------------------------Usuários---------------------------------
Route::get('login', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('login', [UsuariosController::class, 'login'])->name('usuario.login');
Route::get('logout', [UsuariosController::class, 'logout'])->name('usuario.logout');
Route::get('/cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuario/cadastrar');
Route::post('/cadastrar', [UsuariosController::class, 'inserir'])->name('usuario/inserir');
Route::get('/visualizar', [UsuariosController::class, 'ver'])->name('usuario/visualizar');

