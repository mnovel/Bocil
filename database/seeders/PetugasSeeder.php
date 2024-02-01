<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = [
            ["nama" => "Petugas A"],
            ["nama" => "Petugas B"],
            ["nama" => "Petugas C"],
        ];

        DB::table("petugas")->insert($nama);
    }
}
