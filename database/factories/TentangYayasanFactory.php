<?php

namespace Database\Factories;

use App\Models\TentangYayasan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TentangYayasan>
 */
class TentangYayasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TentangYayasan::class;

    public function definition()
    {
        return [
            'tentang_yayasan' => $this->faker->paragraphs(3, true), // Deskripsi tentang yayasan
            'gambar_tentang_yayasan' => $this->faker->imageUrl(800, 600, 'business', true), // Gambar tentang yayasan
            'visi' => $this->faker->paragraphs(2, true), // Visi yayasan
            'misi' => $this->faker->paragraphs(3, true), // Misi yayasan
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
