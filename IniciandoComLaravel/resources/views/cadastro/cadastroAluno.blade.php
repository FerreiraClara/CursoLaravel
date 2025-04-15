@extends('layout.index')
@section('titulo', 'Cadastro Alunos')
@section('titulo-nav', 'Cadastro Alunos')

@section('conteudo')
  <div class="container_cadastro">
    <form action="/alunos" method="POST" enctype="multipart/form-data">
      <label for="nome">Nome do Aluno</label>
      <input type="text" id="nome" name="nome" required />

      <label for="pai">Nome do Pai</label>
      <input type="text" id="pai" name="pai" required />

      <label for="mae">Nome da Mãe</label>
      <input type="text" id="mae" name="mae" required />

      <label for="documento">Documento</label>
      <input type="text" id="documento" name="documento" required />

      <label for="certidao">Certidão (imagem)</label>
      <input type="file" id="certidao" name="certidao" accept="image/*" required />

      <label for="turma">Turma</label>
      <select id="turma" name="turma" required>
        <option value="">Selecione uma turma</option>
        @foreach ($turmas as $turma)
          <option value="{{ $turma['id'] }}">{{ $turma['nome'] }}</option>
        @endforeach
      </select>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
@endsection