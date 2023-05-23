<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CadastrarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Painel\HomeController as PainelHomeController;
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

// Rotas usuario
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Rotas passaro
Route::get('painel', HomeController::class)->name('painel');
// Route::get('painel/aves',[])->name('painel.aves');
// Route::get('painel/aves/novo', [])->name('painel.aves.novo');
// Route::post('painel/aves/novo', [])->name('painel.aves.salvar');
// Route::post('painel/aves/editar/{id}',[])->name('painel.aves.editar');
// Route::put('painel/aves/editar/{id}',[])->name('painel.aves.atualizar');
// Route::get('painel/aves/deletar/{id}',[])->name('painel.aves.deletar');
