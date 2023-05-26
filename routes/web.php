<?php

use App\Http\Controllers\CadastrarPassaros;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;


//assistir primeira aula minuto 34 caso eu queira criar algo depois de /sobre/

route::get('/', function(){
    return view ('welcome');
});


route::get('/home', HomeController::class)->name('home');

route::get('/cadastrarpassaros', [CadastrarPassaros::class, 'create'])->name('cadastrarpassaros');
route::get('/cadastrarpassaros', [CadastrarPassaros::class, 'index'])->name('cadastrarpassaros.index');
Route::post('/cadastrarpassaros', [CadastrarPassaros::class, 'registrarPassaro'])->name('cadastrarpassaros.registrarPassaro');