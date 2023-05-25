<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CadastrarPassaros extends Controller
{
    public function create()
    {
        return view('site.cadastrar.cadastrarpassaros');
    }

    public function mostrarHome()
    {
        return view('home.home');
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

        User::create($data);

        return redirect()->route('site.home')->with('success', 'User created successfully!');

    }
}