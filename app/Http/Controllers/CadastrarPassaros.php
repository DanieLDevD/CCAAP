<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastrarPassaros extends Controller
{
    public function create()
    {
        return view('site.cadastrar.cadastrarpassaros');
    }
}
