<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        $home = new Home();
        $dados = $home->lista();
        dd ($dados);
        return view('site.home.index');
    }
}
