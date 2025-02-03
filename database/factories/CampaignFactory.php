<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
            'cerita' => $this->faker->text(300),
            'gambar' => $this->faker->imageUrl(640, 480, 'animals', true),  // Sesuaikan dengan kebutuhan gambar
            'target' => $this->faker->randomFloat(2, 10000, 1000000),  // Target donasi antara 10,000 hingga 1,000,000
            'terkumpul' => $this->faker->randomFloat(2, 1000, 1000000),  // Terkumpul antara 1,000 hingga 1,000,000
            'status' => $this->faker->randomElement(['Aktif', 'Nonaktif']),
            'slug' => Str::slug($this->faker->sentence()),
        ];
    }
}
