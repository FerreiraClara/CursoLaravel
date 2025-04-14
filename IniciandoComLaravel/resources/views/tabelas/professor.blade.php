@extends('layout.index')

@section('conteudo')

    <h1>Listagem professores</h1>
    
    @foreach($listTest as $professor)
        <ul>
            <li>{{ $professor['nome'] }}</li>
        </ul>
    @endforeach

    <!-- verificacao se o array e vazio ou nao -->
    @forelse($arrayVazio as $array)
        {{ $array['nome'] }}
        @empty
            <p>Sem Registros</p>
    @endforelse

@endsection