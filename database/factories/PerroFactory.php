<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombrePerro' => fake()->firstName(),
            'edad' => fake()->randomNumber(1, 20),
            'raza' => fake()->randomElement(['Yorkshire', 'Chihuahua', 'Mastin', 'Pomerania', 'Boxer', 'Pastor alemán']),
            'genero' => fake()->randomElement(['Macho', 'Hembra']),
            'peso' => fake()->randomFloat(2, 1, 80),
            "idDue" => fake()->numberBetween(1, 5),
            "idVet" => fake()->numberBetween(1, 5),
            "fotoPerro" => fake()->imageUrl(640, 480, null, true),
        ];
    }
}