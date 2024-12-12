<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('medicines')->insert([
                'name' => $faker->word . ' ' . $faker->word,
                'brand' => $faker->company,
                'dosage' => $faker->randomElement(['5mg', '10mg', '20mg']) . ' ' . $faker->word,
                'form' => $faker->randomElement(['viên nén', 'viên nang', 'xi rô']),
                'price' => $faker->randomFloat(2, 10, 100),
                'stock' => $faker->numberBetween(10, 100),
            ]);
        }
    }
}