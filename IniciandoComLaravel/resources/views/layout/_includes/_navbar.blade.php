@section('navbar')

<nav class="navbar">
    <div class="logo"><a href="{{ route('home') }}">@yield('titulo-nav')</a></div>
        <ul>
            <li><a href= "{{ route('aluno.lista') }}">Alunos</a></li>
            <li><a href="{{ route('turma.lista') }}">Turmas</a></li>
            <li><a href="{{ route('professor.lista') }}">Professores</a></li>
            <li><a href="{{ route('presenca.inicial') }}">Chamada</a></li>
            <li><a href="{{ route('relatorio.index') }}">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection