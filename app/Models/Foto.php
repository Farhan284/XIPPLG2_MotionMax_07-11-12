<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //

    protected $fillable = [
        
        'gambar',
    ];

    protected $table = 'fotos'; 
}
