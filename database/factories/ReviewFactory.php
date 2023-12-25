<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $floatValues = [1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5];

        return [
            'product_id' => rand(1,20),
            'comment' => $this->faker->paragraph,
            'rating' => $this->faker->randomElement($floatValues)
        ];
    }
}
