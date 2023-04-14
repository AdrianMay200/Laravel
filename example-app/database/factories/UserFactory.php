<?php

namespace Database\Factories;

use App\Models\ingenieria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $name = fake()->firstName();
        $var1 = fake()->randomElement(['1807', '1907', '2007', '2107', '2207']);
        $var2 = fake()->unique()->randomNumber(4, true);
        $control = $var1.$var2;
        $inge=ingenieria::inRandomOrder()->first();
        
        return [
            'name' => $name,
            'email' => $name.'.'.$control.'@itsmotul.edu.mx',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'control' => $control,
            'remember_token' => Str::random(10),
            'id_ingenierias'=>$inge->id,
        ];


    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
