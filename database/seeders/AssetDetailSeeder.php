<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssetDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assetDetails = [
            [
                'asset_id' => 1,
                'panjang' => 20.00,
                'lebar' => 13.00,
                'tarif' => 390000,
                'jumlah_asset' => 3
            ],
            [
                'asset_id' => 1,
                'panjang' => 40.00,
                'lebar' => 30.00,
                'tarif' => 1800000,
                'jumlah_asset' => 3
            ]
        ];

        DB::table('asset_details')->insert($assetDetails);
    }
}
