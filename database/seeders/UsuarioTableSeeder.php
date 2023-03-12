<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $informacion = [];

        for ($i = 0; $i < 10; $i++)
            $informacion[] =
                [
                    "nombre" => $faker->firstName(),
                    "apellido" => $faker->lastName,
                    "email" => $faker->email,
                    "password" => Hash::make("123456"),
                    "telefono" => fake()->phoneNumber,
                    "admin" => $i % 2 == 0 ? true : false,
                ];

        //
        DB::table("usuario")->insert($informacion);
    }
}