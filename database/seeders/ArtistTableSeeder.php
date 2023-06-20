<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $newArtist= new Artist();
            $newArtist->name= $faker->name();
            $newArtist->slug= $faker->slug();
            $newArtist->birth_date= $faker->dateTime();
            $newArtist->death_date= $faker->dateTime();
            $newArtist->works= $faker->sentence(3);
            $newArtist->nationality= $faker->word();
            $newArtist->genre= $faker->word();
            $newArtist->photo= $faker->imageUrl(640, 480, 'animals', true);

            $newArtist->save();

        }

    }
}
