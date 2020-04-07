<?php

use App\Models\Image;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->name = $faker->firstName . ' ' . $faker->lastName;
            $user->email = $faker->email;
            $user->password = $faker->password;
            $user->save();

            for ($j = 0; $j < 5; $j++) {
                $news = new News();
                $news->title = $faker->sentence($nbWords = 5, $variableNbWords = true);
                $news->summary = $faker->paragraph($nbSentences = 2, $variableNbSentences = true);
                $news->content = $faker->paragraph($nbSentences = 10, $variableNbSentences = true);
                $news->is_published = $faker->numberBetween($min = 0, $max = 1);
                $news->author_id = $user->id;
                $news->save();

                $image = new Image();
                $image->imageable_id = $news->id;
                $image->imageable_type = 'App\Models\News';
                $image->filename = $faker->imageUrl($width = 640, $height = 480);
                $image->save();
            }
        }
    }
}
