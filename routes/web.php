<?php

use App\Http\Controllers\CadastrarController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;


//assistir primeira aula minuto 34 caso eu queira criar algo depois de /sobre/

route::get('/', function(){
    return view ('welcome');
});

route::get('/cadastrar', [CadastrarController::class, 'create']);

route::post('/cadastrar', function(){ 
    var_dump($_POST);
});


route::get('/home', [HomeController::class, 'create']);