<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'nama_band' => $this->faker->unique()->userName(),
            'id_line' => 'line_123',
            'whatsapp' => '08673827237',
            'bukti_pembayaran' => 'bukti-transaksi.png',
            'status' => $this->faker->randomElement(['belum', 'sudah', 'tolak']),
        ];
    }
}
