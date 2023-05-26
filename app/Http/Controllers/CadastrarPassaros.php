<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ave;
use Illuminate\Http\Request;

class CadastrarPassaros extends Controller
{
    public function index()
    {
        $passaros = Ave::all();
        return view('site.cadastrar.cadastrarpassaros')->with('passaros', $passaros);
    }
    
    public function create()
    {
        return view('site.cadastrar.cadastrarpassaros');
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

        return redirect()->route('home')->with('success', 'User created successfully!');

    }
}