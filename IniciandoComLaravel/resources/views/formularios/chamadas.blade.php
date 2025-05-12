@extends('layout.index')

@section('titulo', 'Chamada')
@section('titulo-nav', 'Chamada')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')

   <div>
    <form action="" method="POST"> 
    @csrf

      <input type="date" name="data" id="data">

      @foreach($alunos as $aluno)
      <div style='display=flex'>
        <input type="text" name='{{$aluno->id}}id' value="{{$aluno->id}}"></input>
        <input type="text" name='{{$aluno->id}}nome' value="{{$aluno->nome}}"></input>
        <label for="presente">Presente</label>
        <input type="checkbox" name="{{$aluno->id}}presenca" id="presente" value='Presente'>
        <label for="ausente">Ausente</label>
        <input type="checkbox" name="{{$aluno->id}}presenca" id="ausente" value='Ausente'>
      </div>
      @endforeach

      <button type="submit">Salvar</button>
    </form>
    
   </div>

@endsection

@section('footer')
  @include('layout._includes._footer')
@show