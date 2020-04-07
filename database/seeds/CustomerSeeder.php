<?php

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $customer = new Customer();
            $customer->name = $faker->firstName . ' ' . $faker->lastName;
            $customer->email = $faker->email;
            $customer->address = $faker->address;
            $customer->zip_code = $faker->randomNumber($nbDigits = 5, $strict = false);
            $customer->save();
        }
    }
}
