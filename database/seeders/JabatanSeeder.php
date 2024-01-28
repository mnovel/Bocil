<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = [
            ["nama" => "Jabatan A"],
            ["nama" => "Jabatan B"],
            ["nama" => "Jabatan C"],
        ];

        DB::table("jabatans")->insert($nama);
    }
}
