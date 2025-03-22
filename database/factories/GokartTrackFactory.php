<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GokartTrack>
 */
class GokartTrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a random name
            'description' => $this->faker->paragraph, // Generate a random description
            'latitude' => $this->faker->latitude($min = -180, $max = 180),
            'longitude' => $this->faker->longitude($min = -180, $max = 180), // Ensure valid longitude range
        ];
    }
}
