<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Futsal>
 */
class FutsalFactory extends Factory
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
            'nama_tim' => $this->faker->unique()->userName(),
            'nama_ketua_tim' => $this->faker->name,
            'no_hp' => '08673827237',
            'anggota1' => $this->faker->name,
            'anggota2' => $this->faker->name,
            'anggota3' => $this->faker->name,
            'anggota4' => $this->faker->name,
            'anggota5' => $this->faker->name,
            'cadangan1' => $this->faker->name,
            'cadangan2' => $this->faker->name,
            'cadangan3' => $this->faker->name,
            'cadangan4' => $this->faker->name,
            'cadangan5' => $this->faker->name,
            'kartu_identitas' => 'kartu-identitas.pdf',
            'bukti_pembayaran' => 'bukti-transaksi.png',
            'status' => $this->faker->randomElement(['belum', 'sudah', 'tolak']),
        ];
    }
}
