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
            'nama' => $this->faker->name(),
            'email' => $this->faker->email(),
            'no_identitas' => '6231526231',
            'no_hp' => '08673827237',
            'kota' => 'Jakarta',
            'tipe' => 'early',
            'kode_unik' => $this->faker->unique()->bothify('MN####'),
            'kartu_identitas' => 'kartu-identitas.pdf',
            'bukti_pembayaran' => 'bukti-transaksi.png',
            'status' => $this->faker->randomElement(['belum', 'sudah']),
        ];
    }
}
