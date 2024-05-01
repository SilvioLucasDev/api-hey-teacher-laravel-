<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => fake()->sentence() . '?',
            'status'   => 'draft',
        ];
    }

    public function published(): self
    {
        return $this->state(fn (array $attributes) => ['status' => 'published']);
    }

    public function draft(): self
    {
        return $this->state(fn (array $attributes) => ['status' => 'draft']);
    }
}
