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
        $factory->define(Post::class, function (Faker $faker) {
        return [
            'judul' => $faker->sentence(3),
            'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
            'tags' => $faker->sentence(2)
        ];
        });
    }
}
