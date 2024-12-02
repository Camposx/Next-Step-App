<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'company_name' => $this->faker->company(),
            'job_portal' => $this->faker->randomElement(['LinkedIn', 'Indeed', 'Glassdoor', 'Monster']),
            'work_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Freelance']),
            'work_mode' => $this->faker->randomElement(['Remote', 'On-site', 'Hybrid']),
            'salary_range' => $this->faker->randomElement(['$40k-$50k', '$50k-$60k', '$60k-$80k']),
            'notes' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['Active', 'Pending', 'Closed']),
        ];
    }
}
