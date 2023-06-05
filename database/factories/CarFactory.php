<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(),
            'year' => $this->faker->numberBetween(1980, 2018),
            'max_speed' => $this->faker->numberBetween(100, 300),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->word(),
            'number_of_doors' => $this->faker->numberBetween(2, 10)
        ];
    }
}
