@extends('layout.index')

@section('titulo-nav', 'Login')

<!-- @section('navbar-opcoes')
@endsection -->

@section('conteudo')

    <div class="container_cadastro">
        <form action="" method="POST">
        @csrf

            <input type="text" id="login" name="login" placeholder="Login" required>

            <input type="password" id="senha" name="senha" placeholder="Senha" required>

            <!-- <label for="turma">Turma Responsável:</label>
            <input type="text" id="turma" name="turma" required> -->

            <button type="submit">Entrar</button>
        </form>
   </div>

@endsection