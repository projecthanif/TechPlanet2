<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->text(),
            'author_id' => 1,
            'published_at' => $this->faker->dateTimeThisDecade(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'category_id' => BlogCategory::all()->random(1)->first()->id,
            'tags' => $this->faker->randomElement(['world', 'music', 'tech']),
            'excerpt' => $this->faker->text(50),
            'slug' => $this->faker->slug(),
            'image_url' => $this->faker->imageUrl(),
            'view_count' => $this->faker->numberBetween(0, 100)
        ];
    }
}
