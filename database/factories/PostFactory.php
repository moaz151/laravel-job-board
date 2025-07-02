<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid()->toString(), // Generate a UUID for the id
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(3, true),
            'author' => $this->faker->name,
            'published' => $this->faker->boolean, // 80% chance of being true
        ];
    }
}
