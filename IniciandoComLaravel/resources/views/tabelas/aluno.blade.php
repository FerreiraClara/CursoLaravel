@extends('layout.index')

@section('titulo-nav', 'Listagem alunos')

@section('conteudo')

    <div class='tabela'>
        <table>
            <tr>
                <th> Nome </th>
                <th> Nome Pai </th>
                <th> Nome Mãe </th>
                <th> Documento </th>
                <th> Certidão </th>
                <th> Turma </th>
                <th> Criado por </th>
            </tr>
            @forelse($alunos as $aluno)
                <tr>
                    <td> {{ $aluno['nome'] }} </td>
                    <td> {{ $aluno['nome_pai'] }} </td>
                    <td> {{ $aluno['nome_mae'] }} </td>
                    <td> {{ $aluno['documento'] }} </td>
                    <td> {{ $aluno['certidao'] }} </td>
                    <td> {{ $aluno['turma']['nome'] }} </td>
                    <td> {{ $aluno['professor']['nome'] }} </td>
                </tr>
                @empty
                <td>Sem Registros</td>
            @endforelse
        </table>
    </div>

@endsection