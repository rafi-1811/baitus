<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMedia>
 */
class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SocialMedia::class;

    public function definition()
    {
        return [
            'gambar_icon' => $this->faker->imageUrl(100, 100, 'social', true, 'jpg'), // Gambar icon acak
            'link_sosial_media' => $this->faker->url, // URL acak untuk sosial media
            'nama_sosial_media' => $this->faker->randomElement(['Facebook', 'Instagram', 'Twitter', 'LinkedIn', 'WhatsApp']), // Nama sosial media acak
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
