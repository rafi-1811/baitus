<?php

namespace Database\Factories;

use App\Models\DataYatim;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataYatim>
 */
class DataYatimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DataYatim::class;

    public function definition()
    {
        return [
            'total_yatim_binaan' => $this->faker->numberBetween(100, 500), // Jumlah yatim binaan
            'total_yatim_luar_binaan' => $this->faker->numberBetween(50, 300), // Jumlah yatim luar binaan
            'total_kegiatan' => $this->faker->numberBetween(10, 100), // Jumlah kegiatan
            'total_daerah_cakupan' => $this->faker->numberBetween(1, 20), // Jumlah daerah cakupan
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
