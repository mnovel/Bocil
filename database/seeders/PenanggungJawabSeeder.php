<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenanggungJawabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pj = [
            [
                "nama" => "Abdul",
                "nip" => "123456789012345678",
                "status" => "Aktif",
                "jabatan_id" => 1
            ]
        ];

        DB::table("penanggung_jawabs")->insert($pj);
    }
}
