<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ProfessorTableSeeder::class);
        $this->call(TurmaTableSeeder::class);
        $this->call(AlunosTableSeeder::class);

        // User::factory(10)->create();

        Aluno::factory(5)->create();
    }
}
