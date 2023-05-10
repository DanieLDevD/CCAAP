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

Route::post('/cadastro-usuario', CadastroUsuarioController::class);

Route::get('/login', LoginController::class);

Route::get('/home', HomeController::class);

Route::get('cadastro-ave', CadastroAve::class);
