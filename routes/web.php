<?php

use App\Http\Controllers\CadastrarController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'teste']);

Route::get('/cadastrar', [CadastrarController::class, 'create']);

Route::post('/cadastrar', function(){
    return 'enviado com sucesso';
});

Route::put('/cadastrar', function(){
    return 'enviado com put';
});
