<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\temas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\notas>
 */
class NotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Usua=User::inRandomOrder()->first();
        $Tem=temas::inRandomOrder()->first();
        return [
            'palabrasC'=>fake()->word(),
            'resumen'=>fake()->sentence(),
            'contenido'=>fake()->sentence(),
            'id_users'=>$Usua->id,
            'id_temas'=>$Tem->id,


            //
        ];
    }
}
