@extends('layout.index')
@section('titulo', 'Alunos')

@section('conteudo')
  <div class="container">
    <h2>Cadastro de Aluno</h2>
    <form action="/aluno/cadastrar" method="POST" enctype="multipart/form-data">
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
        <option value="1">Turma 1A</option>
        <option value="2">Turma 2B</option>
        <option value="3">Turma 3C</option>
        <!-- Aqui você pode gerar dinamicamente com Blade ou React depois -->
      </select>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
@endsection