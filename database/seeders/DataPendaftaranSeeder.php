<?php

namespace Database\Seeders;

use App\Models\DataPendaftaran;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::factory()->count(10)->hasDataPendaftaran()->hasClosings(3)->create();
    }
}
