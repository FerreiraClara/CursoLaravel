<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professor extends Model
{
    use HasFactory;
 
    protected $guardad = ['id_prof'];

    protected $fillable = [
        'nome',
        'telefone',
    ];

    protected $table = 'professores';
}
