<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $table = 'assets';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'lokasi', 'jenis_id'];
    public $timestamps = true;

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function assetDetails()
    {
        return $this->hasMany(AssetDetail::class, 'asset_id', 'id');
    }
}
