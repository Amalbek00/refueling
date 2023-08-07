<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Database\Factories\FuelTypeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelType::factory(2)->create();
    }
}
