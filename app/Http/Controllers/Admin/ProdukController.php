<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(7);
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'jenis_lensa' => 'required|string|max:255',
            'bahan_lensa' => 'required|string',
            'minus_plus' => 'required|string',
            'indeks_bias' => 'required|string',
            'perlindungan_uv' => 'required',
            'anti_radiasi' => 'required',
            'anti_gores' => 'required',
            'keluhan_pengguna' => 'required|string',
            'jenis_aktivitas' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk', 'public');
        } else {
            $gambarPath = null;
        }

        // Simpan ke database
        Produk::create([
            'jenis_lensa' => $request->jenis_lensa,
            'bahan_lensa' => $request->bahan_lensa,
            'minus_plus' => $request->minus_plus,
            'indeks_bias' => $request->indeks_bias,
            'perlindungan_uv' => $request->perlindungan_uv,
            'anti_radiasi' => $request->anti_radiasi,
            'anti_gores' => $request->anti_gores,
            'keluhan_pengguna' => $request->keluhan_pengguna,
            'jenis_aktivitas' => $request->jenis_aktivitas,
            'harga' => $request->harga,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'jenis_lensa' => 'required|string|max:255',
            'bahan_lensa' => 'required|string',
            'minus_plus' => 'required|string',
            'indeks_bias' => 'required|string',
            'perlindungan_uv' => 'required',
            'anti_radiasi' => 'required',
            'anti_gores' => 'required',
            'keluhan_pengguna' => 'required|string',
            'jenis_aktivitas' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cek apakah ada file gambar baru di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                Storage::delete('public/' . $produk->gambar);
            }
            // Simpan gambar baru
            $path = $request->file('gambar')->store('produk', 'public');
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $path = $produk->gambar;
        }

        $produk->update([
            'jenis_lensa' => $request->jenis_lensa,
            'bahan_lensa' => $request->bahan_lensa,
            'minus_plus' => $request->minus_plus,
            'indeks_bias' => $request->indeks_bias,
            'perlindungan_uv' => $request->perlindungan_uv,
            'anti_radiasi' => $request->anti_radiasi,
            'anti_gores' => $request->anti_gores,
            'keluhan_pengguna' => $request->keluhan_pengguna,
            'jenis_aktivitas' => $request->jenis_aktivitas,
            'harga' => $request->harga,
            'gambar' => $path, // Gunakan variabel $path yang sudah diperbaiki
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete($produk->gambar);
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
