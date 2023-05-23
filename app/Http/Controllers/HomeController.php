<?php

namespace App\Http\Controllers;
use App\Models\Passaro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('site.home.home');
    }
    
    /*
    public function index() {
        $reg = Passaro::all();
        return view('site.home.home', compact('reg'));
    }
    */
}
