<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FutsalSeeder;
use Database\Seeders\ValorantSeeder;
use Database\Seeders\PubgMobileSeeder;
use Database\Seeders\MobileLegendSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return $this->call([
            MobileLegendSeeder::class,
            ValorantSeeder::class,
            PubgMobileSeeder::class,
            FutsalSeeder::class,
            ClosingSeeder::class,
            BandSeeder::class,
        ]);
    }
}
