<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('paginasIniciais.aluno');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turmas = Turma::all();

        return view('formularios.cadastroAluno', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:128',
            'pai' => 'required|string|max:128',
            'mae' => 'required|string|max:128',
            'documento' => 'required|string',
            'certidao' => 'required|file|image',
            'turma' => 'required',
            // 'criado_por' => 'required',


        ]);

        $aluno = new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->nome_pai = $request->input('pai');
        $aluno->nome_mae = $request->input('mae');
        $aluno->documento = $request->input('documento');
        $aluno->id_turma = $request->input('turma');
        // $aluno->criado_por = auth()->user()->id;
        $aluno->criado_por = '1';

        if ($request->hasFile('certidao') && $request->file('certidao')->isValid()){
            $arquivo = $request->file('certidao');
            $nome_arquivo = time() . '_' . $arquivo->getClientOriginalName();
            $caminho = $arquivo->storeAs('certidoes', $nome_arquivo, 'public');

            $aluno->certidao = $caminho;
        } else {
            $aluno->certidao = null;
        }

        $aluno->save();

        return redirect()->back()->with('success', 'Aluno cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showAll()
    {
        $alunos = Aluno::with('turma', 'professor')->get();

        return view('tabelas.aluno', compact('alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
