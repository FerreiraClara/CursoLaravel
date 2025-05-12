@extends('layout.index')

@section('titulo-nav', 'Login')

@section('login')

    <div class="container_login">
        <div class="container_cadastro form_login">
            <form action="" method="POST" style='width: 100%'>
            @csrf

                <h2>Login</h2>

                <input type="text" id="login" name="login" placeholder="Login" required>

                <input type="password" id="senha" name="senha" placeholder="Senha" required>

                <button type="submit">Entrar</button>
            </form>
            <div class="alerta alerta-successo {{ session('success') ? '' : 'hidden' }}">
                {{ session('success') }}
            </div>
        
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                <p>{{ \Session::get('error') }}</p>
                </div>
            @endif
        </div>
    </div>

@endsection