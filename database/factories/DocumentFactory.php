<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'crew_id' => fake()->numberBetween(0, 1000000),
            'code' => fake()->numberBetween(0, 1000000),
            'name' => fake()->word(),
            'number' => fake()->unique()->numberBetween(0, 1000000),
            'date_issued' => fake()->date(),
            'date_expiry' => fake()->date(),
            'remarks' => fake()->sentence(),
        ];
    }
}
