<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HardwareDevicesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('hardware_devices')->insert([
                'device_name' => $faker->word . ' ' . $faker->randomElement(['Pro', 'Elite', 'Gaming']),
                'type' => $faker->randomElement(['Mouse', 'Keyboard', 'Headset']),
                'status' => $faker->boolean,
                'center_id' => rand(1, 5), // Giả sử có 5 trung tâm
            ]);
        }
    }
}