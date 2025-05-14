@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Jenis Lensa</label>
                <input type="text" name="jenis_lensa" value="{{ old('jenis_lensa', $produk->jenis_lensa) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Bahan Lensa</label>
                <textarea name="bahan_lensa" class="w-full p-2 border border-gray-300 rounded-lg">{{ old('bahan_lensa', $produk->bahan_lensa) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Minus / Plus</label>
                <input type="text" name="minus_plus" value="{{ old('minus_plus', $produk->minus_plus) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Indeks Bias</label>
                <input type="text" name="indeks_bias" value="{{ old('indeks_bias', $produk->indeks_bias) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Pilihan Ya / Tidak dengan Dropdown -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Perlindungan UV</label>
                <select name="perlindungan_uv" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="ya" {{ old('perlindungan_uv', $produk->perlindungan_uv) == 'ya' ? 'selected' : '' }}>Ya</option>
                    <option value="tidak" {{ old('perlindungan_uv', $produk->perlindungan_uv) == 'tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Anti Radiasi</label>
                <select name="anti_radiasi" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="ya" {{ old('anti_radiasi', $produk->anti_radiasi) == 'ya' ? 'selected' : '' }}>Ya</option>
                    <option value="tidak" {{ old('anti_radiasi', $produk->anti_radiasi) == 'tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Anti Gores</label>
                <select name="anti_gores" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="ya" {{ old('anti_gores', $produk->anti_gores) == 'ya' ? 'selected' : '' }}>Ya</option>
                    <option value="tidak" {{ old('anti_gores', $produk->anti_gores) == 'tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Keluhan Pengguna</label>
                <input type="text" name="keluhan_pengguna" value="{{ old('keluhan_pengguna', $produk->keluhan_pengguna) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Jenis Aktivitas</label>
                <input type="text" name="jenis_aktivitas" value="{{ old('jenis_aktivitas', $produk->jenis_aktivitas) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Harga</label>
                <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Gambar Produk</label>
                <input type="file" name="gambar" class="w-full p-2 border border-gray-300 rounded-lg">
                @if($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" class="w-24 h-24 object-cover mt-2">
                @endif
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.produk.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600 mr-2">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection