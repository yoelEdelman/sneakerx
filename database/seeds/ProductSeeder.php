<?php

use App\Models\Brand;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
            $brand->name = $faker->unique()->company;
            $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
            $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
            $brand->save();

            $image = new Image();
            $image->imageable_id = $brand->id;
            $image->imageable_type = 'App\Models\Brand';
            $image->filename = $faker->imageUrl($width = 640, $height = 480);
            $image->save();

            for ($j = 0; $j < 20; $j++) {
                $product = new Product();
                $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
                $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
                $product->main_image = $faker->imageUrl($width = 640, $height = 480);
                $product->price = $faker->numberBetween($min = 20, $max = 200);
                $product->color = $faker->colorName;
                $product->size = $faker->numberBetween($min = 38, $max = 46);
                $product->quantity = $faker->numberBetween($min = 0, $max = 35);
                $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
                $product->is_published = $faker->numberBetween($min = 0, $max = 1);
                $product->brand_id = $brand->id;
                $product->save();

                for ($k = 0; $k < 5; $k++) {
                    $image = new Image();
                    $image->imageable_id = $product->id;
                    $image->imageable_type = 'App\Models\Product';
                    $image->filename = $faker->imageUrl($width = 640, $height = 480);
                    $image->save();
                }
            }
        }

//        for ($i = 0; $i < 20; $i++) {
//            $product = new Product();
//            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
//            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
//            $product->main_image = $faker->imageUrl($width = 640, $height = 480);
//            $product->price = $faker->numberBetween($min = 20, $max = 200);
//            $product->color = $faker->colorName;
//            $product->size = $faker->numberBetween($min = 38, $max = 46);
//            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
//            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
//            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
//            $product->brand_id = Brand::find($i)->id;
//            $product->save();
//        }
    }
}
