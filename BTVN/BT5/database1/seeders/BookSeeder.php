<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('books')->insert([
                'id' => $index,
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'publication_year' => $faker->year,
                'genre' => $faker->word,
                'library_id' => rand(1, 10), // Random liên kết với 1 thư viện
            ]);
        }
    }
}
