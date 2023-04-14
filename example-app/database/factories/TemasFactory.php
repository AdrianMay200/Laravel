<?php

namespace Database\Factories;

use App\Models\asignaturas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\temas>
 */
class TemasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Asi=asignaturas::inRandomOrder()->first();
        return [
            'nombre'=>fake()->word(),
            'id_asignaturas'=>$Asi->id,
            


            
            //
        ];
    }
}
