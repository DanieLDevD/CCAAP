<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CadastrarPassaros extends Controller
{
    public function create()
    {
        return view('site.cadastrar.cadastrarpassaros');
    }
    
    public function index()
    {
        $passaros = Ave::all();
        return view('cadastrarpassaros.index', compact('cadastrarpassaros'));
    }


    public function registrarPassaro(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'anilha' => 'required',
            'anilhalegal' => 'required',
            'especie' => 'required',
            'nasc' => 'required',
            'sexo' => 'required',
            'pai' => 'required',
            'mae' => 'required',
        ]);

        Ave::create($data);

        return redirect()->route('passaros.index')->with('success', 'User created successfully!');

    }
}