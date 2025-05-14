@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-4">Rekomendasi Lensa</h1>
    <p class="text-center text-muted">Masukkan informasi Anda untuk mendapatkan rekomendasi lensa kacamata yang sesuai.</p>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('customer.rekomendasi') }}" method="GET">
                        @csrf

                        <!-- Keluhan Pengguna -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keluhan Pengguna</label>
                            <select class="form-select" name="keluhan">
                                <option value="" disabled @if(old('keluhan', request('keluhan'))==null) selected @endif>Pilih keluhan Anda</option>
                                <option value="rabun jauh" @if(old('keluhan', request('keluhan'))=='rabun jauh' ) selected @endif>Rabun Jauh</option>
                                <option value="rabun dekat" @if(old('keluhan', request('keluhan'))=='rabun dekat' ) selected @endif>Rabun Dekat</option>
                                <option value="silinder" @if(old('keluhan', request('keluhan'))=='silinder' ) selected @endif>Silinder</option>
                                <option value="presbiopi" @if(old('keluhan', request('keluhan'))=='presbiopi' ) selected @endif>Presbiopi</option>
                                <option value="rabun jauh ekstrem" @if(old('keluhan', request('keluhan'))=='rabun jauh ekstrem' ) selected @endif>Rabun Jauh Ekstrem</option>
                                <option value="mata cepat lelah" @if(old('keluhan', request('keluhan'))=='mata cepat lelah' ) selected @endif>Mata Cepat Lelah</option>
                                <option value="kabur" @if(old('keluhan', request('keluhan'))=='kabur' ) selected @endif>Kabur</option>
                                <option value="sensitif cahaya" @if(old('keluhan', request('keluhan'))=='sensitif cahaya' ) selected @endif>Sensitif Cahaya</option>
                                <option value="silau" @if(old('keluhan', request('keluhan'))=='silau' ) selected @endif>Silau</option>
                            </select>
                        </div>

                        <!-- Jenis Aktivitas Pengguna -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Aktivitas Pengguna</label>
                            <select class="form-select" name="aktivitas">
                                <option value="" disabled @if(old('aktivitas', request('aktivitas'))==null) selected @endif>Pilih aktivitas utama Anda</option>
                                @php
                                $opsiAktivitas = [
                                'Penggunaan komputer',
                                'Aktivitas luar ruangan',
                                'Membaca dan Menulis',
                                'Aktivitas sehari hari',
                                'Mengemudi',
                                'Aktivitas olahraga',
                                'Penggunaan Gadget',
                                'Aktif Indoor dan Outdoor',
                                'Aktivitas Terbatas',
                                'Penglihatan Khusus',
                                'Kerja Kantor',
                                'Pekerjaan Detail',
                                'Aktivitas Menjahit',
                                'Desain Grafis',
                                'Editing'
                                ];
                                @endphp
                                @foreach($opsiAktivitas as $opsi)
                                <option value="{{ $opsi }}" @if(old('aktivitas', request('aktivitas'))==$opsi) selected @endif>{{ ucfirst($opsi) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Preferensi Pengguna -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Preferensi Pengguna</label>
                            @php $preferensi = request('preferensi', []); @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferensi[]" value="anti_radiasi"
                                    @if(in_array('anti_radiasi', $preferensi)) checked @endif>
                                <label class="form-check-label">Lensa Anti Radiasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferensi[]" value="perlindungan_uv"
                                    @if(in_array('perlindungan_uv', $preferensi)) checked @endif>
                                <label class="form-check-label">Perlindungan UV</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferensi[]" value="anti_gores"
                                    @if(in_array('anti_gores', $preferensi)) checked @endif>
                                <label class="form-check-label">Anti Gores</label>
                            </div>
                        </div>


                        <!-- Bahan Lensa -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Bahan Lensa</label>
                            <select class="form-select" name="bahan_lensa">
                                <option value="" disabled @if(old('bahan_lensa', request('bahan_lensa'))==null) selected @endif>Pilih bahan lensa</option>
                                <option value="Polycarbonate" @if(old('bahan_lensa', request('bahan_lensa'))=='Polycarbonate' ) selected @endif>Polycarbonate</option>
                                <option value="Glass" @if(old('bahan_lensa', request('bahan_lensa'))=='Glass' ) selected @endif>Glass</option>
                                <option value="Plastic" @if(old('bahan_lensa', request('bahan_lensa'))=='Plastic' ) selected @endif>Plastic</option>
                                <option value="High Index" @if(old('bahan_lensa', request('bahan_lensa'))=='High Index' ) selected @endif>High Index</option>
                                <option value="Trivex" @if(old('bahan_lensa', request('bahan_lensa'))=='Trivex' ) selected @endif>Trivex</option>
                            </select>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Dapatkan Rekomendasi</button>
                        </div>
                    </form>

                    @if(request()->query() && isset($hasil))
                    <hr class="my-5">
                    <h3 class="text-center">Hasil Rekomendasi Lensa</h3>

                    @if($hasil->isEmpty())
                    <div class="alert alert-warning text-center mt-3">Maaf, tidak ditemukan lensa yang sesuai dengan kriteria Anda.</div>
                    @else
                    <div class="row mt-4">
                        @foreach($hasil->take(2) as $produk)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-primary shadow-sm">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top img-fluid" style="height: 250px; object-fit: contain;" alt="{{ $produk->jenis_lensa }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">{{ $produk->jenis_lensa }}</h5>
                                    <h5 class="card-title fw-bold">{{ $produk->bahan_lensa }}</h5>
                                    <a href="{{ route('produk.detail', $produk->id) }}" class="btn btn-primary mt-3">Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    @endif

                    @if(isset($hasil) && $hasil->isNotEmpty())
<script>
    const hasilRekomendasi = @json($hasil);
    console.log("=== Hasil Rekomendasi ===");
    hasilRekomendasi.forEach(produk => {
        console.log(`Produk: ${produk.jenis_lensa}, Skor: ${produk.match_score}, Hasil: ${produk.match_result}`);
    });
</script>
@endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection