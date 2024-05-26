<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $default_thumbnails = ['blog-1-default.png', 'blog-2-default.png', 'blog-3-default.png'];
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'main_tag' => $this->faker->word(),
            'secondary_tags' => json_encode($this->faker->words()),
            'thumbnail' => $default_thumbnails[array_rand($default_thumbnails)],
            'featured_image' => 'blog-details-default.png',
            'posted_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_active' => $this->faker->boolean(),
            'user_id' => UserFactory::new()->create(),
            'slug' => $this->faker->slug(),
        ];
    }
}
