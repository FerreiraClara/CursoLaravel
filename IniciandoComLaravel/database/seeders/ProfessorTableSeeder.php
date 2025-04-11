<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Professor;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // sempre cria esse professor com dado fixo
        Professor::factory()->create([
            'nome' => 'Priscila',
            'telefone' => '00 00000-0000',
        ]);

        // gera professores aleatórios - Obs: Precisa ter chamado no model o HasFactory, 
        // que, por sua vez, precisa ter o ProfessorFactory criado no arquivo de fábricas (factories)
        Professor::factory(5)->create();
    }
}
