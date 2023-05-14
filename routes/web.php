<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Cadastro;
use \App\Http\Controllers\homeController;

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

//assistir primeira aula minuto 34 caso eu queira criar algo depois de /sobre/

route::get('/', function(){
    return view ('welcome');
});

route::get('/cadastro', Cadastro::class);

route::post('/cadastro', function(){ 
    var_dump($_POST);
});


route::get('/home', homeController::class);