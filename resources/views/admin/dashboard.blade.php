@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-3xl font-bold text-gray-800">Dashboard Admin</h2>
    <p class="mt-2 text-gray-600">Kelola sistem dengan mudah melalui panel admin ini.</p>

    <!-- Ringkasan Statistik -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Total Produk</h3>
            <p class="text-2xl font-bold mt-2">{{ $totalProduk ?? '0' }}</p>
        </div>
        <div class="bg-green-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Rekomendasi</h3>
            <p class="text-2xl font-bold mt-2">{{ $totalRekomendasi ?? '0' }}</p>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Pengguna</h3>
            <p class="text-2xl font-bold mt-2">{{ $totalPengguna ?? '0' }}</p>
        </div>
        <div class="bg-red-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Admin Aktif</h3>
            <p class="text-2xl font-bold mt-2">{{ $totalAdmin ?? '0' }}</p>
        </div>
    </div>

    <!-- Produk Terbaru -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Produk Terbaru</h3>

        @if($produkTerbaru->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($produkTerbaru as $produk)
            <div class="bg-gray-100 p-4 rounded-lg shadow">
                <img src="{{ asset('storage/' . $produk->gambar) }}" class="w-full h-40 object-cover rounded-md">
                <h4 class="mt-2 text-lg font-bold">{{ $produk->jenis_lensa }}</h4>
                <p class="text-gray-600">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-gray-500">Belum ada produk yang tersedia.</p>
        @endif
    </div>


</div>
@endsection