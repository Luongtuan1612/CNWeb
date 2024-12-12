<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LibrarySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('libraries')->insert([
                'id' => $index,
                'name' => $faker->company . ' Library',
                'address' => $faker->address,
                'contact_number' => $faker->phoneNumber,
            ]);
        }
    }
}
