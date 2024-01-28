<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asset = [
            [
                'nama' => 'Mall A',
                'lokasi' => 'Malang',
                'jenis_id' => 1,
            ]
        ];

        DB::table('assets')->insert($asset);
    }
}
