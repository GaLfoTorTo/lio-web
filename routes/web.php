<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [Homecontroller::class, 'home'])->name('home');
Route::get('/perfil', [Homecontroller::class, 'perfil'])->name('perfil');
Route::get('/post', [Homecontroller::class, 'post'])->name('post');
Route::get('/novo', [Usuarioscontroller::class, 'novo'])->name('novo');
Route::post('/cadastrar', [Usuarioscontroller::class, 'cadastrar'])->name('cadastrar');
