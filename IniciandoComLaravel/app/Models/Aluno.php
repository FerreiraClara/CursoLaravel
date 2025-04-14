<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Turma;
use App\Models\Professor;

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

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'criado_por');
    }
}
