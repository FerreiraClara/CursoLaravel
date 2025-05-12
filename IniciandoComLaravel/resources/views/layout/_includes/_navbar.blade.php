@section('navbar')

<nav class="navbar">
    <div class="logo"><a href="{{ route('home') }}">@yield('titulo-nav')</a></div>
        <ul>
            <li><a href= "{{ route('aluno.lista') }}">Alunos</a></li>
            <li><a href="{{ route('turma.lista') }}">Turmas</a></li>
            <li><a href="{{ route('professor.lista') }}">Professores</a></li>
            <li><a href="{{ route('chamada') }}">Chamada</a></li>
            <li><a href="{{ route('relatorios') }}">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection