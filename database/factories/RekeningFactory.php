<?php

namespace Database\Factories;

use App\Models\Rekening;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekening>
 */
class RekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Rekening::class;

    public function definition()
    {
        return [
            'gambar_rekening_bank' => $this->faker->imageUrl(), // Gambar rekening bank (bisa sesuaikan dengan format atau path yang diinginkan)
            'nama_bank' => $this->faker->company, // Nama bank
            'no_rekening' => $this->faker->bankAccountNumber, // Nomor rekening
            'nama_rekening' => $this->faker->name, // Nama rekening
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
