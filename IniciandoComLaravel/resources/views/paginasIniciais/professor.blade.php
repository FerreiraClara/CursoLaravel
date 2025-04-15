@extends('layout.index')
@section('titulo', 'Página Inicial - Professor')

@section('conteudo')
<div class="container_inicial">
    <div class="botoes">
        <a href="{{ route('cadastro.professor') }}" class="botao_cadastrar">Cadastrar</a>
        <a href="{{ route('tabela.professor') }}" class="botao_cadastrar botao_tabela">Ver Tabela</a>
    </div>
</div>
@endsection