<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Presenca;

class RelatoriosController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();

        return view('relatorios', compact('turmas'));
    }

    public function store(Request $request){

        $alunos = Aluno::all();
        $presencas = Presenca::all();

        $lista_alunos_da_turma = [];
        
        $datas = [];
        $lista_final_presenca = [];

        foreach($alunos as $aluno){
            if($aluno->id_turma == $request->input('turma')){
                $dados = [
                    'nome' => $aluno->nome,
                    'id' => $aluno->id,
                ];
                array_push($lista_alunos_da_turma, $dados);
            }
        }
       
        foreach($presencas as $presenca){
            if($datas == []){
                array_push($datas, $presenca->data);
                
            } elseif(!in_array($presenca->data, $datas)) {
                array_push($datas, $presenca->data);
                
            }
        }

        $total_aulas = 0;

        if($lista_alunos_da_turma){
            foreach($lista_alunos_da_turma as $aluno){
                $presente = 0;
                $ausente = 0;
                foreach($presencas as $presenca){
                    if($presenca->aluno == $aluno['id']){
                        if($presenca->presenca == 'Presente'){
                            $presente += 1;
                        
                        } else{
                            $ausente += 1;
                        }
                    }
                }
                
                $total_aulas = count($datas);
    
    
                $dados = [
                    'nome' => $aluno['nome'],
                    'presente' => $presente*100/$total_aulas,
                    'ausente' => $ausente*100/$total_aulas,
                ];
    
                array_push($lista_final_presenca, $dados);
    
            }
        }
        
        return view('tabelas.relatorios', compact('lista_final_presenca', 'total_aulas'));

    }

    public function show()
    {
    //     $alunos = Aluno::all();
    //     $presencas = Presenca::all();

    //     $lista = [];
    //     $datas = [];

    //     foreach($presencas as $presenca){
    //         if($datas == []){
    //             array_push($datas, $presenca->data);
                
    //         } elseif(!in_array($presenca->data, $datas)) {
    //             array_push($datas, $presenca->data);
                
    //         }
    //     }

    //     foreach($alunos as $aluno){
    //         $presente = 0;
    //         $ausente = 0;
    //         foreach($presencas as $presenca){
    //             if($presenca->aluno == $aluno->id){
    //                 if($presenca->presenca == 'Presente'){
    //                     $presente += 1;
                    
    //                 } else{
    //                     $ausente += 1;
    //                 }
    //             }
    //         }

    //         $dados = [
    //             'nome' => $aluno->nome,
    //             'presente' => $presente,
    //             'ausente' => $ausente,
    //         ];

    //         array_push($lista, $dados);

    //     }

    //     return view('tabelas.relatorios', compact('lista', 'datas'));
    }
}
