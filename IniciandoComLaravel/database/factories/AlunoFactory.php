<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Turma;
use App\Models\Professor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'nome_pai' => fake()->name(),
            'nome_mae' => fake()->name(),
            'documento' => fake()->unique()->numerify('###.###.###-##'),
            'certidao' => fake()->unique()->lexify('certidao_??????.jpg'),
            'id_turma' => Turma::factory(),
            'criado_por' => Professor::factory(),
        ];

    }
}
