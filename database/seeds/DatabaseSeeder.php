<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yoel',
            'email' => 'yoeledelman@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call([
//            ProductSeeder::class,
//            NewsSeeder::class,
        ]);
    }
}
