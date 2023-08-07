<?php

namespace Database\Seeders;

use App\Models\Client;
use Database\Factories\ClientFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(10)->create();
    }
}