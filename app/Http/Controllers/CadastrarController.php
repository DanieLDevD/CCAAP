<?php

namespace App\Http\Controllers;

use App\Models\Cadastrar;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{



    public function index()
    {
        //
    }

    public function create()
    {
        $cadastrar = new Cadastrar();
        $dados = $cadastrar->lista();
        dd ($dados);
        return view('site.contato.index');
    }

}
