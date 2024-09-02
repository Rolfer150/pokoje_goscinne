<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->text(24);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image_path' => $this->generateImagePaths(),
            'description' => fake()->text(),
            'accommodation_number' => fake()->numberBetween(1,4),
            'price' => fake()->randomFloat(2, 30, 130),
            'apartment_size' => fake()->numberBetween(10, 40),
        ];
    }

    private function generateImagePaths(): array
    {
        $images = [];
        $imageCount = rand(3, 6);

        for ($i = 0; $i < $imageCount; $i++) {
            $images[] = fake()->imageUrl();
        }

        return $images;
    }
}
