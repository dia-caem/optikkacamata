<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class RekomendasiController extends Controller
{
    public function index(Request $request)
    {
        $hasil = collect();

        if ($request->isMethod('GET') && $request->query()) {

            $produkSemua = Produk::all();
            $hasil = collect();

            // Hitung jumlah input user
            $jumlahInput = 0;
            if ($request->filled('keluhan')) $jumlahInput++;
            if ($request->filled('aktivitas')) $jumlahInput++;
            if ($request->has('preferensi')) $jumlahInput += count($request->preferensi);
            if ($request->filled('bahan_lensa')) $jumlahInput++;

            foreach ($produkSemua as $produk) {
                $score = 0;

                // Kecocokan keluhan
                if ($request->filled('keluhan') && stripos($produk->keluhan_pengguna, $request->keluhan) !== false) {
                    $score += 1;
                }

                // Kecocokan aktivitas
                if ($request->filled('aktivitas')) {
                    $aktivitasUser = is_array($request->aktivitas) ? $request->aktivitas : [$request->aktivitas];
                    foreach ($aktivitasUser as $aktivitas) {
                        if (stripos($produk->jenis_aktivitas, $aktivitas) !== false) {
                            $score += 1;
                            break;
                        }
                    }
                }

                // Kecocokan preferensi
if ($request->has('preferensi')) {
    $preferensiUser = $request->preferensi;

    if (in_array('anti_radiasi', $preferensiUser) && $produk->anti_radiasi === 'Ya') {
        $score += 1;
    }

    if (in_array('perlindungan_uv', $preferensiUser) && $produk->perlindungan_uv === 'Ya') {
        $score += 1;
    }

    if (in_array('anti_gores', $preferensiUser) && $produk->anti_gores === 'Ya') {
        $score += 1;
    }
}



                // Kecocokan bahan lensa
                if ($request->filled('bahan_lensa') && $produk->bahan_lensa == $request->bahan_lensa) {
                    $score += 1;
                }

                if ($score > 0 && $jumlahInput > 0) {
                    $produk->match_score = $score;
                    $produk->match_result = round($score / $jumlahInput, 2); // hitung skor dalam desimal
                    $hasil->push($produk);
                }
            }

            $hasil = $hasil->sortByDesc('match_result')->values();
        }

        return view('customer.rekomendasi', compact('hasil'));
    }
}
