<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastrar extends Model
{
    use HasFactory;

    public function lista()
    {
        return (object) [
            'nome' => 'Daniel',
            'email' => 'daniel@daniel.com',
            'senha' => '123',
            'confsenha' => '123'
        ];
    }
}
