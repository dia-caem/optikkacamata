@extends('layouts.app')

@section('content')
<div class="mt-5 bg-white p-4 rounded shadow-sm">
    <h2 class="text-center fw-bold mb-4">Daftar Lensa Kacamata</h2>

    @if($lensa->isNotEmpty())
    <div class="row">
        @foreach($lensa as $produk)
        <div class="col-md-4 mb-4">
            <div class="card border-primary shadow-sm h-100">
                <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top" style="height: 160px; object-fit: cover;" alt="{{ $produk->jenis_lensa }}">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $produk->jenis_lensa }}</h5>
                    <h6 class="card-title fw-bold">{{ $produk->bahan_lensa }}</h6>
                    <!-- Tombol Detail -->
                    <a href="{{ route('produk.detail', $produk->id) }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-muted text-center">Belum ada produk yang tersedia.</p>
    @endif
</div>
@endsection