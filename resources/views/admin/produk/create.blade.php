@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Jenis Lensa</label>
            <input type="text" name="jenis_lensa" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Bahan Lensa</label>
            <textarea name="bahan_lensa" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Minus / Plus</label>
            <input type="text" name="minus_plus" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Indeks Bias</label>
            <input type="text" name="indeks_bias" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <!-- Pilihan Ya / Tidak menggunakan Select -->
        <div class="mb-4">
            <label class="block text-gray-700">Perlindungan UV</label>
            <select name="perlindungan_uv" class="w-full p-2 border border-gray-300 rounded-md">
                <option value="" disabled selected>Pilih Opsi</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Anti Radiasi</label>
            <select name="anti_radiasi" class="w-full p-2 border border-gray-300 rounded-md">
                <option value="" disabled selected>Pilih Opsi</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Anti Gores</label>
            <select name="anti_gores" class="w-full p-2 border border-gray-300 rounded-md">
                <option value="" disabled selected>Pilih Opsi</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Keluhan Pengguna</label>
            <input type="text" name="keluhan_pengguna" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Jenis Aktivitas</label>
            <input type="text" name="jenis_aktivitas" class=" w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Harga</label>
            <input type="number" name="harga" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Upload Gambar</label>
            <input type="file" name="gambar" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan</button>
    </form>
</div>
@endsection