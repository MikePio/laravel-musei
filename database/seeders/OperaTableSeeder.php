<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Opera;
use App\Models\Artist;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) {
            $newOpera = new Opera();
            $newOpera->name = $faker->sentence(3);
            $newOpera->artist_id = Artist::inRandomOrder()->first()->id;
            $newOpera->slug = Opera::generateSlug($newOpera->name);
            $newOpera->created_in = $faker->date();
            $newOpera->save();

        }


    }
}
