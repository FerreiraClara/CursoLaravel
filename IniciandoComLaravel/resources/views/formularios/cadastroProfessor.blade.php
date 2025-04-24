@extends('layout.index')
@section('titulo', 'Cadastro Professores')
@section('titulo-nav', 'Cadastro Professores')

@section('navbar')
  @include('layout._includes._navbar')
@show

@section('conteudo')

   <div class="container_cadastro">
    <form action="" method="POST">
      @csrf

      <input type="text" id="nome" name="nome" placeholder="Nome do Professor" required>
      <input type="text" id="email" name="email" placeholder="Email" required>
      <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
      <input type="text" id="senha" name="senha" placeholder="Senha" required>
      <input type="text" id="confirmaSenha" name="confirmaSenha" placeholder="Confirma senha" required>
        <select name="nivelAcesso" id="nivelAcesso" placeholder="Nível de acesso">
            <option value="">Selecione o Nível de Acesso</option>
            <option value="1">1 - Básico</option>
            <option value="2">2 - Médio</option>
        </select>
      <!-- <label for="turma">Turma Responsável:</label>
      <input type="text" id="turma" name="turma" required> -->

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