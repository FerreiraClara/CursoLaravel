@extends('layout.index')

@section('titulo-nav', 'Listagem professores')

@section('conteudo')

    <div class='tabela'>
        <table>
            <tr>
                <th> Nome </th>
                <th> Telefone </th>
            </tr>
            @forelse($professores as $professor)
                <tr>
                    <td> {{ $professor['nome'] }} </td>
                    <td> {{ $professor['telefone'] }} </td>
                </tr>
                @empty
                <td>Sem Registros</td>
            @endforelse
        </table>
    </div>

@endsection