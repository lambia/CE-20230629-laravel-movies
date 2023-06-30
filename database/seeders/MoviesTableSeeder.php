<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker; //v. metodo run in basso
use Faker\Generator;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * NON VERRA' MAI ESEGUITO (v. METODO SOTTO)
     *
     * @return void
     */
    public function run_senza_faker()
    {
        $movies = config("seeder.movies");

        // Mi raccomando: try/catch e un pò di logica!
        // $moviesJson = file_get_contents("database/seeders/movies.json");
        // $movies = json_decode($moviesJson);
    
        foreach ($movies as $movie) {
            $newMovie = new Movie(); 
            $newMovie->title = $movie["title"];
            $newMovie->original_title = $movie["original_title"];
            $newMovie->cover = $movie["cover"];
            $newMovie->nationality = $movie["nationality"];
            $newMovie->date = $movie["date"];
            $newMovie->vote = $movie["vote"];
            $newMovie->save();
        }

    }

    // public function run(Faker $faker) { //vedi use in alto
    public function run(Generator $faker) {
         
        for ($i = 0; $i < 10; $i++){
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(3);
            $newMovie->original_title = $faker->sentence(2);
            $newMovie->cover = $faker->imageUrl(320, 180, "movies", true);
            $newMovie->nationality = $faker->countryCode();
            $newMovie->date = $faker->date();
            $newMovie->vote = $faker->randomFloat(1, 0, 9);
            $newMovie->save();
        }

    }
}
