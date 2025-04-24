@extends('layout.index')
@section('titulo', 'Cadastro Alunos')
@section('titulo-nav', 'Cadastro Alunos')

@section('navbar')
  @include('layout._includes._navbar')
@show

@section('conteudo')
  <div class="container_cadastro">
    <!-- enctype="multipart/form-data" é por causa da certidao -->
    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      
      <input type="text" id="nome" name="nome" placeholder="Nome do Aluno" required />

      <input type="text" id="pai" name="pai" placeholder="Pai do aluno" required />

      <input type="text" id="mae" name="mae" placeholder="Mãe do Aluno" required />

      <input type="text" id="documento" name="documento" placeholder="Documento" required />

      <label for="certidao" style="font-size: 10px">Certidão (imagem)</label>
      <input type="file" id="certidao" name="certidao" accept="image/*" required />

      <select id="turma" name="turma" required>
        <option value="">Selecione uma turma</option>
        @foreach ($turmas as $turma)
          <option value="{{ $turma['id'] }}">{{ $turma['nome'] }}</option>
        @endforeach
      </select>

      <button type="submit">Cadastrar</button>
    </form>

    @if (\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
    
    @if (\Session::has('error'))
        <div class="alert alert-danger">
        <p>{{ \Session::get('error') }}</p>
        </div>
    @endif
    
  </div>
@endsection