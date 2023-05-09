<?php

namespace Database\Factories;

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
        $title = fake()->sentence();
        return [
            'title_ar' =>  $title . ' ar',
            'title_eng' =>  $title . ' eng',
            'body_ar' => fake()->paragraph() . ' ar',
            'body_eng' => fake()->paragraph() . ' eng',
            'photo' => fake()->imageUrl(1040, 680),
            'admin_id' => 1,
            'category_id' => fake()->numberBetween(1, 10),
            'slug' => Str::slug($title)

        ];
    }
}
