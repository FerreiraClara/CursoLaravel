@extends('layout.index')
@section('titulo', 'Cadastro Professores')
@section('titulo-nav', 'Cadastro Professores')

@section('conteudo')

   <div class="container_cadastro">
    <form action="/professores" method="POST">
      <!-- CSRF para Laravel -->
      <!-- @csrf -->

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

      <!-- <label for="turma">Turma Responsável:</label>
      <input type="text" id="turma" name="turma" required> -->

      <button type="submit">Cadastrar</button>
    </form>
   </div>

    
    <!-- @if(2 == 1)
        <p>É igual</p>
    @elseif(2 > 1)
        <p>É maior</p>
    @endif

    @for($i=0; $i<3; $i++)
        Contando com o for {{$i}} <br>
    @endfor -->

    <!-- <?php $i = 0; ?> -->

    <!-- @while($i <= 4)
        <p> While {{$i++}}</p>
    @endwhile
     -->

@endsection