<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'anilha',
        'anilhalegal',
        'especie',
        'nasc',
        'sexo',
        'pai',
        'mae',
    ];
}