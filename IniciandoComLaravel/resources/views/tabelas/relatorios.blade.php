@extends('layout.index')

@section('titulo-nav', 'Relatorio')

@section('navbar')
  @include('layout._includes._navbar')
@endsection

@section('conteudo')

    <div class='container-tabela'>
        <div class='tabela'>
            <h3> Professor responsável: {{ $prof_responsavel }}</h3>
            <p> Total de Aulas: {{ $total_aulas }}</p>
            <table>
                <tr>
                    <th> Aluno </th>
                    <th> Presente </th>
                    <th> Ausente </th>
                </tr>
                @foreach($lista_final_presenca as $dado)
                <tr>
                    <td> {{ $dado['nome'] }} </td>
                    <td> {{ $dado['presente'] }}% </td>
                    <td> {{ $dado['ausente'] }}% </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

@section('footer')
  @include('layout._includes._footer')
@show