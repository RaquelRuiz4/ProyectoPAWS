<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veterinario>
 */
class VeterinarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "idUsu" => fake()->numberBetween(1, 5),
            'especialidad' => fake()->randomElement(['Cirujano', 'Oftalmólogo', 'Nutricionista', 'Traumatólogo', 'Odontólogo', 'Neurólogo']),
            "foto" => fake()->imageUrl(640, 480, null, true)
        ];
    }
}