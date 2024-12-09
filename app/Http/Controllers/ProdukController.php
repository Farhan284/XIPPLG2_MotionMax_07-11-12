<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil semua produk dari database
        $produks = Produk::all();
        
        // Mengirim data produk ke view
        return view('produk.index', compact('produks'));
    }
}
