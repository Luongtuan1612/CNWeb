<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CinemasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('cinemas')->insert([
                'name' => $faker->company . ' Cinema',
                'location' => $faker->city,
                'total_seats' => rand(200, 500),
            ]);
        }
    }
}