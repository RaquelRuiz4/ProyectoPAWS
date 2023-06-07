<?php

namespace Database\Factories;

use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'Descripción' => $this->faker->sentence,
            'Indicaciones' => $this->faker->paragraph,
            'Precio' => $this->faker->randomFloat(2, 1, 100),
            'Cantidad' => $this->faker->numberBetween(1, 100),
        ];
    }
}
