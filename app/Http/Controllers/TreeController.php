<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Support\Facades\Auth;

class TreeController extends Controller
{
    public function tree()
    {
        $birds = Bird::where('user_id', Auth::id())->get(); //Pega aves do ID autenticado


        return view('dashboard.birds.tree', compact('birds'));
    }
}
