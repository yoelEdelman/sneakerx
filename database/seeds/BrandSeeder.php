<?php

use App\Models\Brand;
use App\Models\Image;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $brand = new Brand();
            $brand->name = $faker->company;
            $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
            $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
            $brand->save();

            $image = new Image();
            $image->imageable_id = $brand->id;
            $image->imageable_type = 'App\Models\Brand';
            $image->filename = 'http://lorempixel.com/640/480/';
            $image->save();
        }
    }
}
