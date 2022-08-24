<?php

namespace Database\Factories;

Use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
Use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => fake()->title,
            'body' => fake()->paragraph,
            'created_at' => now(),
        ];
    }
}
