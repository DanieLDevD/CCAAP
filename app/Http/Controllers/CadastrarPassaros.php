<?php

namespace App\Http\Controllers;

use App\Models\Ave;
use Illuminate\Http\Request;

class CadastrarPassaros extends Controller
{

    public function index()
    {
        $passaros = Ave::all();
        return view('home', compact('passaros'));
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

        return redirect()->route('home')->with('success', 'Ave registrada com sucesso!');
    }

    public function excluirPassaro(Request $request, $id)
    {
        $passaro = Ave::findOrFail($id);
        $passaro->delete();

        return redirect()->route('home')->with('success', 'Ave excluída com sucesso!');
    }
}