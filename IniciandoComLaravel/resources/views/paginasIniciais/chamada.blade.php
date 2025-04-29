@extends('layout.index')
@section('titulo', 'Página Inicial - Alunos')

@section('titulo-nav', 'Chamada')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')
<div class="container_inicial">
    <div class="botoes">
        <a href="#" class="botao_cadastrar">Turma 1</a>
        <a href="#" class="botao_cadastrar botao_tabela">Turma 2</a>
    </div>
</div>
@endsection