<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Program;

class BeritaFactory extends Factory
{
    protected $model = \App\Models\Berita::class;

    public function definition()
    {
        return [
            'id' => fake()->uuid, 
            'judul' => fake()->sentence(6, true), 
            'slug' => fake()->slug, 
            'kategori' => Program::inRandomOrder()->value('kategori_program'), 
            'body' => fake()->paragraphs(5, true),
            'meta_deskripsi' => fake()->sentence(10, true), 
            'meta_keywords' => implode(',', fake()->words(5)), 
            'cover_gambar_berita' => fake()->imageUrl(850, 450, 'berita', true, 'gambar_cover'), 
            'gambar_content' => fake()->imageUrl(379, 239, 'konten berita', true, 'gambar_isi_berita'), 
            'quotes' => fake()->sentence(10, true), 
            'status' => fake()->randomElement(['published', 'draft', 'reviewing']), 
            'created_at' => now(), 
            'updated_at' => now(),
        ];
    }

}
