@extends('layout.index')

@section('titulo', 'Cadastro de Turmas')
@section('titulo-nav', 'Cadastro de Turmas')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')

   <div class="container_cadastro">
    <form action="" method="POST">
    @csrf

      <input type="text" id="nome" name="nome" placeholder="Nome da turma" required>

      <select id="diaSemana" name="diaSemana" required>
        <option value="">Selecione um dia da semana</option>
        <option value="Segunda-feira">Segunda-feira</option>
        <option value="Terça-feira">Terça-feira</option>
        <option value="Quarta-feira">Quarta-feira</option>
        <option value="Quinta-feira">Quinta-feira</option>
        <option value="Sexta-feira">Sexta-feira</option>
        <option value="Sábado">Sábado</option>
      </select>

      <select id="professorResponsavel" name="professorResponsavel" required>
        <option value="">Selecione uma professor responsável</option>
        @foreach ($professores as $professor)
          <option value="{{$professor['id']}}">{{$professor['nome']}}</option>
        @endforeach

      </select>

      <button type="submit">Cadastrar</button>
    </form>
    
    @if (\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
    
    @if (\Session::has('error'))
        <div class="alert alert-danger">
        <p>{{ \Session::get('error') }}</p>
        </div>
    @endif
    
   </div>

@endsection