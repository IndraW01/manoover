<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPendaftaran>
 */
class DataPendaftaranFactory extends Factory
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
            'no_identitas' => $this->faker->slug,
            'no_hp' => $this->faker->phoneNumber(),
            'domisili' => $this->faker->streetName(),
            'kartu_identitas' => 'kartu-identitas.pdf'
        ];
    }
}
