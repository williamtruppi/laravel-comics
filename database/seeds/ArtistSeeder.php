<?php

use App\Artist;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newArt = new Artist();
            $newArt->name = $faker->firstName();
            $newArt->lastname = $faker->lastName();
            $newArt->save();
        }
    }
}
