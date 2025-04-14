<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Turma extends Model
{
    use HasFactory;
 
    protected $guardad = ['id'];

    protected $fillable =[
        'nome',
        'diaDaSemana',
        'prof_responsavel',
    ];

    public $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public static function listaTurmas()
    {
        return "Lista Turmas";
    }
}
