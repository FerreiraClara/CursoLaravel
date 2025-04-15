@extends('layout.index')
@section('titulo', 'Cadastro Professores')
@section('titulo-nav', 'Cadastro Professores')

@section('conteudo')

   <div class="container_cadastro">
    <form action="" method="POST">
      @csrf

      <input type="text" id="nome" name="nome" placeholder="Nome do Professor" required>

      <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

      <!-- <label for="turma">Turma Responsável:</label>
      <input type="text" id="turma" name="turma" required> -->

      <button type="submit">Cadastrar</button>
    </form>
    <div class="alerta alerta-successo {{ session('success') ? '' : 'hidden' }}">
        {{ session('success') }}
    </div>
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