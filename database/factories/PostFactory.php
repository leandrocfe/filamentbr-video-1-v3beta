<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $user = User::inRandomOrder()->first()->id;

        $title = fake()->sentence();

        return [
            'author_id' => $user,
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->text(),
            'tags' => fake()->randomElements(['laravel', 'php', 'database', 'framework', 'testing', 'unit'], rand(1, 6)),
            'published' => true,
            'published_at' => fake()->dateTimeThisYear(),
        ];
    }
}
