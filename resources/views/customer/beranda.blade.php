@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Hero Section -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{ asset('asset/images/hero1.jpg') }}" class="d-block w-100" alt="Hero 1">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">
                    <h1 class="fw-bold text-light text-shadow">Temukan Lensa Kacamata Terbaik</h1>
                    <p class="lead text-light text-shadow">Dapatkan lensa yang sesuai dengan kebutuhan penglihatan Anda.</p>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="{{ asset('asset/images/hero2.jpg') }}" class="d-block w-100" alt="Hero 2">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">
                    <h1 class="fw-bold text-light text-shadow">Lindungi Mata Anda dengan Teknologi Terkini</h1>
                    <p class="lead text-light text-shadow">Lensa anti radiasi dan blue light untuk kenyamanan mata Anda.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <style>
        /* Overlay semi-transparan untuk meningkatkan keterbacaan teks */
        .carousel-item {
            position: relative;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Warna gelap semi-transparan */
        }

        /* Efek shadow agar teks lebih terlihat */
        .text-shadow {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
        }
    </style>

    <!-- Daftar Lensa Kacamata -->
    <div class="mt-5 bg-white p-4 rounded shadow-sm">
        <h2 class="text-center fw-bold mb-4">Produk Lensa Terbaru</h2>

        @if($lensaList->isNotEmpty())
        <div class="row">
            @foreach($lensaList as $produk)
            <div class="col-md-4 mb-4">
                <div class="card border-primary shadow-sm h-100">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $produk->jenis_lensa }}">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $produk->jenis_lensa }}</h5>
                        <p class="card-text text-muted">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted text-center">Belum ada produk yang tersedia.</p>
        @endif
    </div>


    <!-- Fitur Layanan -->
    <h2 class="mt-5 text-center fw-bold">Fitur Layanan Kami</h2>
    <div class="row mt-4 text-center">
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-4">
                <i class="bi bi-shield-check text-primary display-4"></i>
                <h4 class="fw-bold mt-3">Kualitas Terbaik</h4>
                <p>Lensa berkualitas tinggi dengan teknologi terbaru.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-4">
                <i class="bi bi-truck text-primary display-4"></i>
                <h4 class="fw-bold mt-3">Pengiriman Cepat</h4>
                <p>Pesanan Anda dikirim dengan aman dan cepat.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-4">
                <i class="bi bi-headset text-primary display-4"></i>
                <h4 class="fw-bold mt-3">Layanan Pelanggan</h4>
                <p>Kami siap membantu Anda dengan konsultasi gratis.</p>
            </div>
        </div>
    </div>

    <!-- Testimoni Pelanggan -->
    <h2 class="mt-5 text-center fw-bold">Apa Kata Pelanggan Kami?</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-3 text-center">
                <img src="{{ asset('asset/images/user1.jpg') }}" class="rounded-circle mx-auto d-block" width="80" alt="User 1">
                <h5 class="fw-bold mt-3">Rina S.</h5>
                <p class="fst-italic">"Lensa ini sangat nyaman digunakan, penglihatan jadi lebih jernih!"</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-3 text-center">
                <img src="{{ asset('asset/images/user2.jpg') }}" class="rounded-circle mx-auto d-block" width="80" alt="User 2">
                <h5 class="fw-bold mt-3">Dika P.</h5>
                <p class="fst-italic">"Pelayanan sangat baik, produknya berkualitas tinggi!"</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary shadow-sm p-3 text-center">
                <img src="{{ asset('asset/images/user3.jpg') }}" class="rounded-circle mx-auto d-block" width="80" alt="User 3">
                <h5 class="fw-bold mt-3">Ayu M.</h5>
                <p class="fst-italic">"Saya suka desain lensa ini, stylish dan nyaman!"</p>
            </div>
        </div>
    </div>

    <!-- Call To Action -->
    <div class="mt-5 p-4 text-center bg-primary text-light rounded">
        <h2 class="fw-bold">Siap Mendapatkan Lensa Terbaik?</h2>
        <p>Konsultasikan kebutuhan Anda dan temukan lensa yang tepat.</p>
        <a href="#" class="btn btn-light btn-lg">Konsultasi Sekarang</a>
    </div>

    <!-- FAQ -->
    <h2 class="mt-5 text-center fw-bold">Pertanyaan yang Sering Diajukan</h2>
    <div class="accordion mt-3" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Apakah lensa ini memiliki perlindungan anti radiasi?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ya, kami menyediakan lensa dengan perlindungan anti radiasi dan blue light.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Bagaimana cara melakukan pemesanan?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Anda dapat melakukan pemesanan melalui website ini atau menghubungi layanan pelanggan kami.</div>
            </div>
        </div>
    </div>
</div>

@endsection