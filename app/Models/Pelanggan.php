<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'alamat',
    ];
}