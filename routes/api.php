<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Login
Route::post('/logarApp', [UsuariosController::class, 'logarApp'])->name('logarApp');

Route::get('/feed', [PostsController::class, 'feed'])->name('feed');

//Usuarios
Route::get('/perfil/{id}', [UsuariosController::class, 'perfil'])->name('perfil');
Route::get('/usuarios', [UsuariosController::class, 'usuarios'])->name('usuarios');
Route::post('/cadastrar', [UsuariosController::class, 'cadastrar'])->name('cadastrar');


