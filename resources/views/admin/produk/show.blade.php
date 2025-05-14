@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Detail Produk</h3>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-4">Jenis Lensa</dt>
                <dd class="col-sm-8">{{ $produk->jenis_lensa }}</dd>

                <dt class="col-sm-4">Bahan</dt>
                <dd class="col-sm-8">{{ $produk->bahan_lensa }}</dd>

                <dt class="col-sm-4">Minus/Plus</dt>
                <dd class="col-sm-8">{{ $produk->minus_plus }}</dd>

                <dt class="col-sm-4">Indeks Bias</dt>
                <dd class="col-sm-8">{{ $produk->indeks_bias }}</dd>

                <dt class="col-sm-4">Harga</dt>
                <dd class="col-sm-8">Rp{{ number_format($produk->harga, 0, ',', '.') }}</dd>

                <dt class="col-sm-4">Keluhan Pengguna</dt>
                <dd class="col-sm-8">{{ $produk->keluhan_pengguna }}</dd>

                <dt class="col-sm-4">Jenis Aktivitas</dt>
                <dd class="col-sm-8">{{ $produk->jenis_aktivitas }}</dd>
            </dl>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('customer.lensa') }}" class="btn btn-secondary">← Kembali ke Daftar Produk</a>
        </div>
    </div>
</div>
@endsection