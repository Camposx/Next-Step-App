<?php

namespace Database\Factories;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Jobs_trackingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'step_name' => $this->faker->randomElement(['Interview', 'Coding Test', 'Application Submitted']),
            'notes' => $this->faker->text(),
            'track_status' => $this->faker->randomElement(['Not Started', 'In Progress', 'Completed', 'On Hold']),
            'job_id' => Jobs::all()->random()->id,
        ];
    }
}
