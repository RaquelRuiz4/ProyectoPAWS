<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //\App\Models\Veterinario::factory(5)->create();
        // \App\Models\Dueno::factory(10)->create();
        $this->call([
            UsuarioTableSeeder::class, VeterinarioSeeder::class
        ]);
        \App\Models\Perro::factory(10)->create();
        \App\Models\Cita::factory(10)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}