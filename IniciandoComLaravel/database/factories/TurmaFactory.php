<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
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
            'diaDaSemana' => fake()->dayOfWeek(),
            'prof_responsavel' => Professor::factory(),
        ];
    }
}
