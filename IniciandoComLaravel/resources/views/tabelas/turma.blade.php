@extends('layout.index')

@section('titulo-nav', 'Listagem turmas')

@section('conteudo')

    <div class='tabela'>
        <table>
            <tr>
                <th> Nome </th>
                <th> Dia da Semana </th>
                <th> Prof. Responsável </th>
            </tr>
            @forelse($turmas as $turma)
                <tr>
                    <td> {{ $turma['nome'] }} </td>
                    <td> {{ $turma['diaDaSemana'] }} </td>
                    <td> {{ $turma['professor']['nome'] }} </td>

                </tr>
                @empty
                <td>Sem Registros</td>
            @endforelse
        </table>
    </div>

@endsection