<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{

    protected $guardad = ['id'];

    protected $fillable =[
        'data',
        'aluno',
        'presenca',
    ];
}
