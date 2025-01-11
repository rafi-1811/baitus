<?php

namespace Database\Factories;

use App\Models\Bannerhome;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BannerHome>
 */
class BannerHomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bannerhome::class;

    public function definition()
    {
        return [
            'gambar' => $this->faker->imageUrl(800, 600, 'business', true), // Gambar banner
            'caption' => $this->faker->sentence, // Caption banner
            'status' => $this->faker->randomElement(['ACTIVE', 'INACTIVE']), // Status banner (ACTIVE / INACTIVE)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
