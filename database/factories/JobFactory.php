<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->jobTitle,
            'employee_id' => Employer::factory(),
            'company' => fake()->company,
            'location' => fake()->country,
            'salary' => "$" . (fake()->numberBetween(100000, 200000)),
        ];
    }
}
