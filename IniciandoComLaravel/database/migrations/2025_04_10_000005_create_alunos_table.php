<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id_aluno');
            $table->string('nome_aluno', 128);
            $table->string('nome_pai_aluno', 128);
            $table->string('nome_mae_aluno', 128);
            $table->string('documento_aluno');
            $table->string('certidao_aluno');
            $table->foreignId('id_turma')->constrained('turmas', 'id_turma')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
