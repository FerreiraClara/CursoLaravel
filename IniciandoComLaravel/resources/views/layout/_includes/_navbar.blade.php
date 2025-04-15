@section('navbar')

<nav class="navbar">
    <div class="logo">@yield('titulo-nav')</div>
        <ul>
        <!-- // return "Index de Aluno" . '<a href="'. route('livro.index') .'">Livro</a>'; -->
            <li><a href="#">Alunos</a></li>
            <li><a href="#">Turmas</a></li>
            <li><a href="#">Professores</a></li>
            <li><a href="#">Chamada</a></li>
            <li><a href="#">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection