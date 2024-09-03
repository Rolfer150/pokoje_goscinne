<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(100),
            'email' => fake()->email(),
            'phone_number' => fake()->numerify('#########'),
            'topic' => fake()->text(32),
            'content' => fake()->realText(),
        ];
    }
}
