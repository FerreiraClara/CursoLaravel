@extends('layout.index')
@section('titulo', 'Página Inicial - Alunos')

@section('navbar')
  @include('layout._includes._navbar')
@show

@section('conteudo')
<div class="container_inicial">
    <div class="botoes">
        <a href="#" class="botao_cadastrar">Chamada</a>
        <a href="#" class="botao_cadastrar botao_tabela">Relatório de Chamadas</a>
        <a href="{{ route('inicial.turma') }}" class="botao_cadastrar botao_tabela">Turmas</a>
        <a href="{{ route('inicial.aluno') }}" class="botao_cadastrar botao_tabela">Alunos</a>
        <a href="{{ route('inicial.professor') }}" class="botao_cadastrar botao_tabela">Professores</a>

    </div>
</div>
@endsection