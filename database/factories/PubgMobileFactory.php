<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PubgMobile>
 */
class PubgMobileFactory extends Factory
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
            'nama_ketua_tim' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'no_hp' => '08673827237',
            'anggota1' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'anggota2' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'anggota3' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'anggota4' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'cadangan1' => $this->faker->firstNameMale() . ' ' . $this->faker->lastNameMale(),
            'kartu_identitas' => 'kartu-identitas.pdf',
            'bukti_pembayaran' => 'bukti-transaksi.png',
            'status' => $this->faker->randomElement(['belum', 'sudah', 'tolak']),
        ];
    }
}
