<?php

namespace Database\Seeders;

use App\Models\DataPendaftaran;
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
        return DataPendaftaran::factory()->count(5)->create();
    }
}
