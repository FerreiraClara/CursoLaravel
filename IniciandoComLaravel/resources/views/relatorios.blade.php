@extends('layout.index')

@section('titulo-nav', 'Relatórios')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')

    <form class='container_relatorios' action="" method="POST">
    @csrf

        <div>
            @foreach($turmas as $turma)
            <button type="submit" name="turma" value="{{$turma->id}}">{{$turma->nome}}</button>
            @endforeach
        </div>
    </form>

@endsection