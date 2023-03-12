<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsuarioFactory extends Factory
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
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName,
            'email' => fake()->unique()->safeEmail(),
            'telefono' => fake()->phoneNumber,
            'password' => Hash::make("123456"), // password
        ];
    }

/**
 * Indicate that the model's email address should be unverified.
 */
// public function unverified(): static
// {
//     return $this->state(fn (array $attributes) => [
//         'email_verified_at' => null,
//     ]);
// }
}