<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Professor;

class Turma extends Model
{
    use HasFactory;
 
    protected $guardad = ['id'];

    protected $fillable =[
        'nome',
        'diaDaSemana',
        'prof_responsavel',
    ];

    public static function listaTurmas()
    {
        return "Lista Turmas";
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'prof_responsavel');
    }
}
