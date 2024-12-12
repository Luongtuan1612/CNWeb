<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LibrarySeeder::class,
            BookSeeder::class,
        ]);
    }
}
