<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    use HasFactory;
 
    protected $guardad = ['id_prof'];

    protected $fillable = [
        'nome',
        'telefone',
    ];

    protected $table = 'professores';
}
