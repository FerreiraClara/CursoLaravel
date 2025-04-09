@extends('layout.index')
@section('conteudo')

<div class="form-container">
    <h2>Cadastro de Professor</h2>
    <form action="/professores" method="POST">
      <!-- CSRF para Laravel -->
      <!-- @csrf -->

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

      <label for="turma">Turma Responsável:</label>
      <input type="text" id="turma" name="turma" required>

      <button type="submit">Cadastrar Professor</button>
    </form>
  </div>

    
    @if(2 == 1)
        <p>É igual</p>
    @elseif(2 > 1)
        <p>É maior</p>
    @endif

    @for($i=0; $i<3; $i++)
        Contando com o for {{$i}} <br>
    @endfor


    <h1>Listagem professores</h1>
    
    @foreach($professores as $professor)
        <ul>
            <li>{{ $professor['nome'] }}</li>
        </ul>
    @endforeach


@endsection