@section('navbar')

<nav class="navbar">
    <div class="logo">@yield('titulo-nav')</div>
        <ul>
            <li><a href= "{{ route('inicial.aluno') }}">Alunos</a></li>
            <li><a href="{{ route('inicial.turma') }}">Turmas</a></li>
            <li><a href="{{ route('inicial.professor') }}">Professores</a></li>
            <li><a href="#">Chamada</a></li>
            <li><a href="#">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection