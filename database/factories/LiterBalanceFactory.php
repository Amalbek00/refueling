<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class LiterBalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => rand(1, 10), // Assuming there are 10 clients created
            'fuel_type_id' => rand(1, 2), // Assuming there are 2 fuel types created
            'balance_volume' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
