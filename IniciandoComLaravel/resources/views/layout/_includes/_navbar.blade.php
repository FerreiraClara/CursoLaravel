@section('navbar')

<nav class="navbar">
    <div class="logo">@yield('titulo-nav')</div>
        <ul>
            <li><a href= "{{ route('cadastro.aluno') }}">Alunos</a></li>
            <li><a href="{{ route('cadastro.turma') }}">Turmas</a></li>
            <li><a href="{{ route('cadastro.professor') }}">Professores</a></li>
            <li><a href="#">Chamada</a></li>
            <li><a href="#">Relatórios</a></li>
        </ul>
    </div>
</nav>

@endsection