<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('dashboard.welcome');
    }
    public function welcome()
    {
        return view('dashboard.welcome');
    }
}
