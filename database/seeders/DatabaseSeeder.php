<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //Permette di lanciare il comando
        //php artisan db:seed
        //senza specificare --class=NomeClasseSeeder.php
        //Esegue tutti i seeder chiamati qui sotto (per ora solo uno)
        $this->call(MoviesTableSeeder::class);
    }
}
