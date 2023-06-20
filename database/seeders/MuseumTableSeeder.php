<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Admin\Museum;

class MuseumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <50 ; $i++) {
            $new_museum  = new Museum();
            $new_museum->name = $faker->lexify('Museo ???????????');
            $new_museum->coordinates = $faker->bothify('##°-##.###### N, ##°-##.###### E');
            $new_museum->state = $faker->country();
            $new_museum->image = $faker->imageUrl();
            $new_museum->theme = $faker->word();
            $new_museum->price = $faker->numerify('$##,##');
            $new_museum->ratings = $faker->numerify('#,#');
            $new_museum->rooms = $faker->numerify('#');
            $new_museum->save();
        }
    }
}
