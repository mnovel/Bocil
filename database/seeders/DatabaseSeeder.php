<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Petugas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JabatanSeeder::class);
        $this->call(PenanggungJawabSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(JenisSeeder::class);
        $this->call(AssetsSeeder::class);
        $this->call(AssetDetailSeeder::class);
        $this->call(SewaSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(UserSeeder::class);
    }
}
