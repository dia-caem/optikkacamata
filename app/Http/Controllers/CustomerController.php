<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class CustomerController extends Controller
{
    public function index()
    {
        $lensaList = Produk::latest()->take(3)->get(); // Ambil 3 produk terbaru

        return view('customer.beranda', compact('lensaList'));
    }

    public function rekomendasi()
    {
        return view('customer.rekomendasi');
    }

    public function lensa()
    {
        // Mengambil semua produk
        $lensa = Produk::all();

        // Mengirim data lensa ke view
        return view('customer.lensa', compact('lensa'));
    }



    public function tentangKami()
    {
        return view('customer.tentang-kami');
    }
}
