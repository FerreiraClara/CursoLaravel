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
            $table->bigIncrements('id');
            $table->string('nome', 128);
            $table->string('nome_pai', 128);
            $table->string('nome_mae', 128);
            $table->string('documento');
            $table->string('certidao');
            $table->foreignId('id_turma')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreignId('criado_por')->references('id')->on('professores');
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
