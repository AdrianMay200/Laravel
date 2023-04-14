<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asignaturas>
 */
class AsignaturasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $asignatura=User::inRandomOrder()->first();
        return [
            'nombre'=>fake()->word(),
            'clave'=>fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'id_users'=>$asignatura->id,
            //
        ];
    }
}
