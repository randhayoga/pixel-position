<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => '$' . fake()->randomNumber(2, true) . ',' . fake()->randomNumber(3, true),
            'location' => fake()->country(),
            'schedule' => fake()->randomElement(['Full-time', 'Hybrid', 'Remote']),
            'url' => fake()->url(),
        ];
    }
}
