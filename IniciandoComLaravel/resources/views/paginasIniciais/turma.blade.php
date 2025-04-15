@extends('layout.index')
@section('titulo', 'Página Inicial - Turma')

@section('conteudo')
<div class="container_inicial">
    <div class="botoes">
        <a href="{{ route('cadastro.turma') }}" class="botao_cadastrar">Cadastrar</a>
        <a href="{{ route('tabela.turma') }}" class="botao_cadastrar botao_tabela">Ver Tabela</a>
    </div>
</div>
@endsection