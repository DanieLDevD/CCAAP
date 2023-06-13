<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\TreeController;

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

// Rotas da Página de Welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

// Rotas usuário login e register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

// Rota da index, middleware auth é responsavel por apenas permitir conexão dos usuarios autenticados pelo register.
Route::middleware('auth')->group(function () {
    // login e register
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    // Rota de cadastrar ave
    Route::get('/birds/create', [BirdController::class, 'create'])->name('birds.create');
    Route::post('/birds', [BirdController::class, 'store'])->name('birds.store');

    // Rota deletar ave
    Route::delete('/birds/{bird}', [BirdController::class, 'destroy'])->name('birds.destroy');

    // Rota editar ave
    Route::put('/birds/{bird}', [BirdController::class, 'update'])->name('birds.update');
    Route::get('/birds/{bird}/edit', [BirdController::class, 'edit'])->name('birds.edit');

    // Rota pesquisar
    Route::get('/birds/search', [DashboardController::class, 'search'])->name('birds.search');

    // Rota da árvore genealógica
    Route::get('/birds/tree', [TreeController::class, 'tree'])->name('birds.tree');
});
