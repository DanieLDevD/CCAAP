<?php

use App\Http\Controllers\CadastrarPassaros;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

/*
route::get('/', function(){
    return view ('welcome');
});
*/

route::get('/home', HomeController::class)->name('home');

route::get('/cadastrarpassaros', [CadastrarPassaros::class, 'create'])->name('cadastrarpassaros.create');
route::get('/cadastrarpassaros/index', [CadastrarPassaros::class, 'index'])->name('cadastrarpassaros.index');
route::post('/cadastrarpassaros', [CadastrarPassaros::class, 'registrarPassaro'])->name('cadastrarpassaros.registrar');

Route::delete('/home/{id}', [CadastrarPassaros::class, 'excluirPassaro'])->name('passaros.excluir');