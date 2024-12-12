<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo 20 máy tính giả

        $operatingSystems = ['Windows 10', 'Windows 11', 'macOS', 'Linux'];
        $cpuBrands = ['Intel', 'AMD', 'Ryzen'];
        $cpuModels = ['Core i5', 'Core i7', 'Ryzen 5', 'Ryzen 7'];

        for ($i = 0; $i < 20; $i++) {
            DB::table('computers')->insert([
                'computer_name' => "Lab" . rand(1, 5) . "-PC" . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                'model' => $faker->word() . ' ' . $faker->randomNumber(4, true),
                'operating_system' => $faker->randomElement($operatingSystems),
                'processor' => $faker->randomElement($cpuBrands) . ' ' . $faker->randomElement($cpuModels),
                'memory' => $faker->randomNumber(2, 2), // RAM từ 4GB đến 16GB
                'available' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
