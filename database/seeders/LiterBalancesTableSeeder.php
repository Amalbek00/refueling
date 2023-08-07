<?php

namespace Database\Seeders;

use App\Models\LiterBalance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiterBalancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LiterBalance::factory(20)->create();
    }
}
