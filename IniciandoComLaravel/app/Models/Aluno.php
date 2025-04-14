<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aluno extends Model
{
    use HasFactory;
 
    protected $guardad = ['id'];

    protected $fillable =[
        'nome',
        'nome_pai',
        'nome_mae',
        'documento',
        'certidao',
        'id_turma',
        'criado_por',
    ];

    public function showAll()
    {
        return $this::all();
    }

    public function showId($id)
    {
        return $this::find($id);
    }
}
