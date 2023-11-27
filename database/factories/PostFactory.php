<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,5),
            'user_id' => rand(1,5),
            'name' => fake()->name(),
            'description' => fake()->sentence(20),
            'photo' => fake()->imageUrl(200,200,"png"),
            'featured' =>0,
        ];
    }
}
