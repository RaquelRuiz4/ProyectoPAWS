<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "idPer" => fake()->numberBetween(1, 5),
            "idVet" => fake()->numberBetween(1, 5),
            "idDue" => fake()->numberBetween(1, 5),
            "fecha_cita" => fake()->dateTime(),
        ];
    }
}