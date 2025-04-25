@extends('layout.index')

@section('titulo-nav', 'Listagem professores')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')
    <div class='container-tabela'>
        <a href="{{ route('cadastro.professor') }}">+ Cadastrar</a>
        <div class='tabela'>
            <table>
                <tr>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Telefone </th>
                    <th> Nivel de Acesso </th>
                </tr>
                @forelse($professores as $professor)
                    <tr>
                        <td> {{ $professor['nome'] }} </td>
                        <td> {{ $professor['email'] }} </td>
                        <td> {{ $professor['telefone'] }} </td>
                        <td> {{ $professor['nivelAcesso'] }} </td>
                    </tr>
                    @empty
                    <td>Sem Registros</td>
                @endforelse
            </table>
        </div>
    </div>

@endsection