@extends('layout.index')

@section('titulo-nav', 'Registro de Presença')

@section('conteudo')

    <div class='tabela'>
        <table>
            <tr>
                <th> Nome </th>
                <th> Presente </th>
                <th> Presente </th>
            </tr>
            @forelse($alunos as $aluno)
                <tr>
                  <td>{{$aluno['nome']}}</td>
                  <td><input type="checkbox" name="presente" id="presente"></td>
                  <td><input type="checkbox" name="ausente" id="ausente"></td>
                </tr>
                @empty
                <td>Sem Registros</td>
            @endforelse
        </table>
    </div>

@endsection