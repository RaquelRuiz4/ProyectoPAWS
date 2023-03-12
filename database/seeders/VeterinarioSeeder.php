<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeterinarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $informacion = [];

        for ($i = 1; $i < 6; $i++)
            $informacion[] =
                [
                    "idUsu" => $i,
                    "especialidad" => fake()->randomElement(['Cirujano', 'Oftalmólogo', 'Nutricionista', 'Traumatólogo', 'Odontólogo', 'Neurólogo']),
                    "foto" => fake()->imageUrl(640, 480, null, true)
                ];
        DB::table("veterinario")->insert($informacion);
    }
}