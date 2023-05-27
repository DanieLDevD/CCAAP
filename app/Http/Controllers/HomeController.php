<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ave;


class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $passaros = Ave::all();
        return view('site.home.home', compact('passaros'));
    }
}