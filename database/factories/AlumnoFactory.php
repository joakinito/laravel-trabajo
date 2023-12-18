<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name,
            'telefono' => fake()->phoneNumber,
            'edad' => fake()->numberBetween(18, 30),
            'password' => bcrypt(fake()->password),
            'email' => fake()->unique()->safeEmail,
            'sexo' => fake()->randomElement(['Masculino', 'Femenino']),
        ];
    }
}
