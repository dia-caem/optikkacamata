<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Pastikan tabel ini sesuai dengan database

    protected $fillable = [
        'jenis_lensa',
        'bahan_lensa',
        'minus_plus',
        'indeks_bias',
        'perlindungan_uv',
        'anti_radiasi',
        'anti_gores',
        'keluhan_pengguna',
        'jenis_aktivitas',
        'harga',
        'gambar'
    ];
}
