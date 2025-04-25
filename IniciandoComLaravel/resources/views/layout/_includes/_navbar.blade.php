@section('navbar')

<nav class="navbar">
    <div class="logo"><a href="{{ route('home') }}">@yield('titulo-nav')</a></div>
        <ul>
            <li><a href= "{{ route('aluno') }}">Alunos</a></li>
            <li><a href="{{ route('turma') }}">Turmas</a></li>
            <li><a href="{{ route('professor') }}">Professores</a></li>
            <li><a href="#">Chamada</a></li>
            <li><a href="#">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection