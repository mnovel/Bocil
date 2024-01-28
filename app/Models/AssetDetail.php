<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetDetail extends Model
{
    protected $table = 'asset_details';
    protected $primaryKey = 'id';
    protected $fillable = ['asset_id', 'panjang', 'lebar', 'tarif', 'jumlah_asset', 'jumlah_digunakan'];
    public $timestamps = true;

    public function asset()
    {
        return $this->belongsTo(Assets::class);
    }
}