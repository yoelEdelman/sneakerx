<?php

use App\Models\Brand;
use App\Models\Image;
use App\Models\Product;
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

        $brand = new Brand();
        $brand->name = 'Adidas';
        $brand->banner = "Fondée en 1949 par Adolf Dassler, spécialisée dans la fabrication d'articles de sport, basée à Herzogenaurach en Allemagne.";
        $brand->description = "Elle est mondialement connue sous l'appellation la marque aux trois bandes, en raison des trois bandes parallèles qui constituent son logo. Pionnier, leader pendant de longues années dans les articles destinés aux sportifs et aussi principal concurrent de Nike, le leader mondial actuel du secteur, Adidas est l'un des équipementiers sportifs les plus connus au monde.";
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'adidas.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }

        $brand = new Brand();
        $brand->name = 'Fila';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'fila.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }

        $brand = new Brand();
        $brand->name = 'Reebok';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'reebok.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }

        $brand = new Brand();
        $brand->name = 'Puma';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'puma.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }

        $brand = new Brand();
        $brand->name = 'Nike';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'nike.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }

        $brand = new Brand();
        $brand->name = 'Vans';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = 'vans.png';
        $image->save();

        for ($j = 0; $j < 20; $j++) {
            $product = new Product();
            $product->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $product->main_image = 'imgtest' . rand(1, 4) . '.jpg';
            $product->price = $faker->numberBetween($min = 20, $max = 200);
            $product->color = $faker->colorName;
            $product->size = $faker->numberBetween($min = 38, $max = 46);
            $product->quantity = $faker->numberBetween($min = 0, $max = 35);
            $product->release_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $product->is_published = $faker->numberBetween($min = 0, $max = 1);
            $product->brand_id = $brand->id;
            $product->save();

            for ($k = 0; $k < 4; $k++) {
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->filename = 'imgtest' . rand(1, 4) . '.jpg';
                $image->save();
            }
        }
    }
}
