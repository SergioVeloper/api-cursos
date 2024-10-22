<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use App\Models\Estudiante;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscripcion>
 */
class InscripcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $curso = Curso::inRandomOrder()->first();
        $estudiante = Estudiante::inRandomOrder()->first();
        return [
            'fecha' => $this->faker->date(),
            'curso_id' => $curso->id,
            'estudiante_id' => $estudiante->id
        ];
    }
}
