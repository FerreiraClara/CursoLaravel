@extends('layout.index')

@section('titulo', 'Cadastro de Turmas')
@section('titulo-nav', 'Cadastro de Turmas')

@section('conteudo')

   <div class="container_cadastro">
    <form action="/turmas" method="POST">

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

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
        <option value="1">Turma 1A</option>
        <option value="1">Turma 1A</option>
        <option value="1">Turma 1A</option>
        <option value="1">Turma 1A</option>
      </select>

      <button type="submit">Cadastrar</button>
    </form>
   </div>

@endsection