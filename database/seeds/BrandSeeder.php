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

        $brand = new Brand();
        $brand->name = 'Adidas';
        $brand->banner = "Fondée en 1949 par Adolf Dassler, spécialisée dans la fabrication d'articles de sport, basée à Herzogenaurach en Allemagne.";
        $brand->description = "Elle est mondialement connue sous l'appellation la marque aux trois bandes, en raison des trois bandes parallèles qui constituent son logo. Pionnier, leader pendant de longues années dans les articles destinés aux sportifs et aussi principal concurrent de Nike, le leader mondial actuel du secteur, Adidas est l'un des équipementiers sportifs les plus connus au monde.";
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Adidas_Logo.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Birkenstock';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Birkenstock_logo.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Converse';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Converse_logo.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Dr Martens';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Dr._Martens_Logo.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Air Jordan';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Jumpman_logo.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Fila';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Logo_Fila.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Reebok';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Logo_Reebok_2019.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Puma';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Puma_AG.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Nike';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Swoosh.svg.png');
        $image->save();

        $brand = new Brand();
        $brand->name = 'Vans';
        $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
        $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
        $brand->save();

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = asset('assets/img/brands/Vans_logo.svg.png');
        $image->save();

//        for ($i = 0; $i < 10; $i++) {
//            $brand = new Brand();
//            $brand->name = $faker->company;
//            $brand->banner = $faker->sentence($nbWords = 10, $variableNbWords = true);
//            $brand->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
//            $brand->save();
//
//            $image = new Image();
//            $image->imageable_id = $brand->id;
//            $image->imageable_type = 'App\Models\Brand';
//            $image->filename = 'http://lorempixel.com/640/480/';
//            $image->save();
//        }
    }
}
