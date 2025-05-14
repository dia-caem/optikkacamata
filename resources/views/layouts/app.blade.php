<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Lensa Kacamata</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #007bff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #0056b3;
        }

        .navbar a {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .navbar-nav .nav-link {
            padding: 10px 15px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        /* Tambahan styling untuk navbar */
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .brand-highlight {
            color: #ffeb3b;
            text-shadow: 1px 1px 5px rgba(255, 235, 59, 0.5);
            font-family: 'Georgia', serif;
            font-style: italic;
        }

        .brand-sub {
            color: #fff;
            font-weight: 600;
        }

        .navbar-brand:hover .brand-highlight {
            color: #ffffff;
            text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.7);
        }

        .navbar-brand:hover .brand-sub {
            color: #ffeb3b;
        }


        .navbar-nav .nav-link {
            position: relative;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #fff;
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .navbar-nav .nav-link:hover {
            color: #ffeb3b !important;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .container {
            flex: 1;
            margin-top: 20px;
            margin-bottom: 30px;
            /* Memberi ruang untuk footer */
        }

        /* Footer */
        footer {
            background: linear-gradient(45deg, #007bff, #00aaff);
            color: white;
            padding: 40px 0;
            text-align: center;
            width: 100%;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            max-width: 1200px;
            margin: auto;
        }

        .footer-section {
            flex: 1;
            margin: 20px;
            min-width: 200px;
        }

        .footer-section h5 {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffeb3b;
            transform: scale(1.1);
        }

        .text-center p {
            font-size: 0.9rem;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('customer.beranda') }}">
                <i class="bi bi-eyeglasses me-2"></i>
                <span class="brand-highlight">Wiratama</span> <span class="brand-sub">Kacamata 2</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.rekomendasi') }}">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.lensa') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.tentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h5>Wiratama Kacamata 2</h5>
                <p>Solusi terbaik untuk kesehatan mata Anda.</p>
            </div>

            <div class="footer-section">
                <h5>Kontak Kami</h5>
                <ul>
                    <li>Email: <a href="mailto:info@optikwiratama.com">info@wiratamakacamata2.com</a></li>
                    <li>Telepon: <a href="tel:+628123456789">+62 812-3456-789</a></li>
                    <li>Alamat: Jl. Plawar Saren Kalijambe </li>
                </ul>
            </div>

            <div class="footer-section">
                <h5>Tautan Cepat</h5>
                <ul>
                    <li><a href="{{ route('customer.beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('customer.rekomendasi') }}">Rekomendasi</a></li>
                    <li><a href="{{ route('customer.tentangKami') }}">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h5>Ikuti Kami</h5>
                <div class="social-icons">
                    <a href="https://facebook.com/optikwiratama" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/optikwiratama" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://twitter.com/optikwiratama" target="_blank"><i class="bi bi-twitter"></i></a>
                </div>
            </div>

        </div>

        <div class="text-center mt-3">
            <p>© 2025 Wiratama Kacamata 2. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>