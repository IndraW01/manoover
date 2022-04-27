<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Closing>
 */
class ClosingFactory extends Factory
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
            'profesi' => $this->faker->randomElement(['Mahasiswa', 'Guru', 'Pelajar', 'Dosen']),
            'no_hp' => '08673827237',
            'kartu_identitas' => 'kartu-identitas.pdf',
            'bukti_pembayaran' => 'bukti-transaksi.png',
            'status' => $this->faker->randomElement(['belum', 'sudah', 'tolak']),
        ];
    }
}
