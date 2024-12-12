<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LaptopsTableSeeder extends Seeder
{
   // LaptopsTableSeeder.php
public function run()
{
    $faker = Faker::create();

    foreach (range(1, 10) as $index) {
        DB::table('laptops')->insert([
            'brand' => $faker->company,
            'model' => $faker->word . ' ' . $faker->randomNumber(2),
            'specifications' => 'i' . $faker->randomDigitNotNull . ', ' . $faker->randomDigitNotNull . 'GB RAM, ' . $faker->randomDigitNotNull . 'GB SSD',
            'rental_status' => $faker->boolean,
            'renter_id' => $faker->boolean ? $faker->numberBetween(1, 10) : null, // Đảm bảo renter_id có giá trị hợp lệ
        ]);
    }
}

}
