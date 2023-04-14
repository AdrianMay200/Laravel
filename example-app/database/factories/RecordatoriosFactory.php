<?php

namespace Database\Factories;

use App\Models\asignaturas;
use App\Models\temas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\recordatorios>
 */
class RecordatoriosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Asi=asignaturas::inRandomOrder()->first();
        $Tem=temas::inRandomOrder()->first();
        return [
            'fecha'=>fake()->date(),
            'recordatorio'=>fake()->sentence(),
            'importancia'=>fake()->randomDigit(),
            'id_asignaturas'=>$Asi->id,
            'id_temas'=>$Tem->id,
            //
        ];
    }
}
