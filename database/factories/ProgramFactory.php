<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProgramFactory extends Factory
{
    protected $model = \App\Models\Program::class;

    public function definition()
    {  
        $kategoriProgram = fake()->unique()->word();
        return [
            'kategori_program' => ucfirst($kategoriProgram), 
            'deskripsi' => fake()->paragraph(3, true), 
            'slug' => Str::slug($kategoriProgram),
            'gambar' => fake()->imageUrl(640, 480, 'abstract', true), 
        ];
    }

}
