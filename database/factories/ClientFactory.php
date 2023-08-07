<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'bin' => $this->faker->unique()->numerify('###########'),
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->boolean(90)
        ];
    }
}
