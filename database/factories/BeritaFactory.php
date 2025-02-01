<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    protected $model = \App\Models\Berita::class;

    public function definition()
    {

        $kategori = \App\Models\Program::inRandomOrder()->first()->kategori_program;

        return [
            'id' => Str::uuid(),
            'judul' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'kategori' => $kategori, // Sesuaikan dengan kategori yang valid
            'body' => $this->faker->paragraph(),
            'meta_deskripsi' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->words(3, true),
            'cover_gambar_berita' => $this->faker->imageUrl(),
            'gambar_dokumentasi' => json_encode([
                $this->faker->imageUrl(),
                $this->faker->imageUrl(),
            ]),
            'id_youtube' => $this->faker->optional()->word(),
            'quotes' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
        ];
    }

}
