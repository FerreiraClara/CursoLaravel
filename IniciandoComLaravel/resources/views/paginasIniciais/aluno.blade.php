@extends('layout.index')
@section('titulo', 'Página Inicial - Alunos')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')
<div class="container_inicial">
    <div class="botoes">
        <a href="{{ route('cadastro.aluno') }}" class="botao_cadastrar">Cadastrar</a>
        <a href="{{ route('tabela.aluno') }}" class="botao_cadastrar botao_tabela">Ver Tabela</a>
    </div>
</div>
@endsection