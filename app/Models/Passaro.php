<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastrarPassaros extends Model
{
    use HasFactory;
    
    public function Passaro() {
        return $this->hasMany(CadastrarPassaros::class);

    }

}