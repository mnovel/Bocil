<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sewa = [
            'kode_transaksi' => '7dc02197-3214-44b3-887e-3962704df114',
            'asset_id' => 1,
            'nama' => 'Muhammad Novel',
            'nik' => '3575020208030003',
            'telepon' => '082143000116',
            'npwr' => '123',
            'alamat' => 'malang',
            'tgl_sewa_mulai' => '2024-01-28',
            'lama_sewa' => 1
        ];

        DB::table('sewas')->insert($sewa);
    }
}
