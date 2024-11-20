<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class produk extends Model
{
    //

    protected $fillable = [
        'nama_produk',
        'harga',
        'warna',
        'foto_id',
        'pelanggan_id'
    ];
    
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function foto(): BelongsTo
    {
        return $this->belongsTo(Foto::class);
    }
}