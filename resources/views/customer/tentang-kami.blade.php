@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-4">Tentang Kami</h1>
    <p class="text-center text-muted">Kenali lebih dekat Optik Wiratama 2 dan layanan terbaik kami.</p>

    <!-- Section: Profil Perusahaan -->
    <div class="row mt-5 align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('asset/images/optik_wiratama2.jpg') }}" class="rounded shadow" alt="Optik Wiratama 2" width="80%">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">Optik Wiratama 2</h3>
            <p>
                Optik Wiratama 2 adalah pusat kacamata terpercaya yang menyediakan berbagai jenis lensa berkualitas tinggi dengan teknologi terbaru.
                Kami berkomitmen untuk memberikan solusi terbaik bagi kesehatan mata pelanggan.
            </p>
            <p>
                Dengan pengalaman bertahun-tahun, kami telah melayani ribuan pelanggan dengan rekomendasi lensa yang tepat, memberikan kenyamanan dan
                kejelasan penglihatan terbaik untuk setiap kebutuhan.
            </p>
        </div>
    </div>

    <!-- Section: Visi & Misi -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h3 class="fw-bold">Visi</h3>
            <p>Mewujudkan optik terpercaya yang menyediakan solusi kesehatan mata terbaik dengan teknologi modern.</p>
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">Misi</h3>
            <ul>
                <li>Menyediakan lensa berkualitas tinggi dengan harga yang kompetitif.</li>
                <li>Memberikan layanan konsultasi profesional untuk kesehatan mata.</li>
                <li>Selalu mengikuti perkembangan teknologi lensa terbaru.</li>
            </ul>
        </div>
    </div>

    <!-- Section: Layanan Kami -->
    <div class="mt-5">
        <h3 class="fw-bold text-center">Layanan Kami</h3>
        <div class="row mt-3">
            <div class="col-md-4 text-center">
                <img src="{{ asset('asset/images/konsultasi_mata.jpg') }}" class="img-fluid rounded shadow-sm" alt="Konsultasi Mata">
                <h5 class="mt-3">Konsultasi Mata</h5>
                <p>Konsultasi gratis dengan optometris kami untuk menentukan lensa yang sesuai dengan kebutuhan Anda.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('asset/images/lensa_berkualitas.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lensa Berkualitas">
                <h5 class="mt-3">Lensa Berkualitas</h5>
                <p>Berbagai pilihan lensa premium dengan fitur anti radiasi, blue light filter, dan lainnya.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('asset/images/pasang_kacamata.jpg') }}" class="img-fluid rounded shadow-sm" alt="Pemasangan Kacamata">
                <h5 class="mt-3">Pemasangan Kacamata</h5>
                <p>Layanan pemasangan dan perbaikan kacamata dengan akurasi tinggi untuk kenyamanan optimal.</p>
            </div>
        </div>
    </div>

    <!-- Section: Testimoni Pelanggan -->
    <div class="mt-5">
        <h3 class="fw-bold text-center">Apa Kata Pelanggan Kami?</h3>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p>⭐️⭐️⭐️⭐️⭐️</p>
                        <p>"Pelayanan sangat ramah dan lensa yang direkomendasikan sangat cocok untuk saya!"</p>
                        <p class="fw-bold">- Rina, Jakarta</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p>⭐️⭐️⭐️⭐️⭐️</p>
                        <p>"Saya sangat puas dengan layanan konsultasi dan pemasangan kacamata di Optik Wiratama."</p>
                        <p class="fw-bold">- Budi, Bandung</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p>⭐️⭐️⭐️⭐️⭐️</p>
                        <p>"Pilihan lensa sangat banyak dan harga sangat bersaing. Saya pasti akan kembali lagi!"</p>
                        <p class="fw-bold">- Siti, Surabaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Lokasi Kami -->
    <div class="mt-5">
        <h3 class="fw-bold text-center">Lokasi Kami</h3>
        <p class="text-center text-muted">Kunjungi toko kami untuk pengalaman belanja yang lebih nyaman.</p>
        <div class="text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.357677070633!2d110.79328077318787!3d-7.4256110731429565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0d0f3683eed1%3A0x115aeb6eeb5cef43!2sWiratama%20kacamata%202!5e0!3m2!1sen!2sid!4v1739849749220!5m2!1sen!2sid"
                width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- Section: Call to Action -->
    <div class="mt-5 text-center">
        <h3 class="fw-bold">Siap Mendapatkan Kacamata Terbaik?</h3>
        <p>Konsultasikan kebutuhan Anda dengan optometris kami sekarang!</p>
        <a href="{{ route('customer.rekomendasi') }}" class="btn btn-primary btn-lg">Dapatkan Rekomendasi</a>
    </div>
</div>
@endsection