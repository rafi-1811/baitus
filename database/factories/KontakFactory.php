<?php

namespace Database\Factories;

use App\Models\Kontak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kontak>
 */
class KontakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Kontak::class;

    public function definition()
    {
        return [
            'alamat' => $this->faker->address, // Menghasilkan alamat acak
            'email' => $this->faker->unique()->safeEmail, // Menghasilkan email acak yang unik
            'telepon' => $this->faker->phoneNumber, // Menghasilkan nomor telepon acak
            'whatsapp' => $this->faker->phoneNumber, // Menghasilkan nomor whatsapp acak
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
