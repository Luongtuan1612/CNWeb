<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MoviesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->sentence(3),
                'director' => $faker->name,
                'release_date' => $faker->dateTimeBetween('-2 years')->format('Y-m-d'),
                'duration' => rand(90, 180),
                'cinema_id' => rand(1, 5), // Giả sử có 5 rạp
            ]);
        }
    }
}
