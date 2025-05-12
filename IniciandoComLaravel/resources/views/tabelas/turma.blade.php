@extends('layout.index')

@section('titulo-nav', 'Listagem turmas')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')

    <div class='container-tabela'>
    <a href="{{ route('turma.index') }}">+ Cadastrar</a>
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
    </div>

@endsection

@section('footer')
  @include('layout._includes._footer')
@show