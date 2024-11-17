<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
 
 use App\Models\Author;
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
            'title' => fake()->sentence,
            'body' => fake()->realText,
            'likes' => fake()->numberBetween(1, 100),
            "author_id" => Author::inRandomOrder()->first()->id
        ];
    }
}
