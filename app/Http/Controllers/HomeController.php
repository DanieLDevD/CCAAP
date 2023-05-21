<?php

namespace App\Http\Controllers;
use App\Models\Passaro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        /* $home = new Home();
        $dados = $home->lista();
        dd ($dados); */
        return view('site.home.home');
    }
    
    public function index() {
        $reg = Passaro::all();
        return view('site.home.home', compact('reg'));
    }
}
