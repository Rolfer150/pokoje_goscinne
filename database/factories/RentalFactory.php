<?php

namespace Database\Factories;

use App\Enums\RentalStatus;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rental_start = Carbon::today()->addDays(rand(0,15));
        $rental_end = Carbon::today()->addDays($rental_start)->addDays(rand(1,30));

        return [
            'name' => fake()->text(100),
            'email' => fake()->email(),
            'phone_number' => fake()->numerify('#########'),
            'comments' => fake()->text(),
            'people_amount' => fake()->numberBetween(1,4),
            'rental_start' => $rental_start->format('Y-m-d'),
            'rental_end' => $rental_end->format('Y-m-d'),
        ];
    }
}
