<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Donasi Online</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #28a745 !important;
        }
        .hero-section {
            background: #28a745;
            color: white;
            padding: 60px 0;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Sistem Donasi Kita
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a 
                        class="nav-link {{ Request::is('/') ? 'active' : '' }}" 
                        href="{{ url('/') }}"
                    >
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a 
                        class="nav-link {{ Request::is('donasi/create') ? 'active' : '' }}" 
                        href="{{ route('donasi.create') }}"
                    >
                        Donasi Sekarang
                    </a>
                </li>

                <li class="nav-item">
                    <a 
                        class="nav-link {{ Request::is('donasi') ? 'active' : '' }}" 
                        href="{{ route('donasi.history') }}"
                    >
                        Riwayat Donasi
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<main class="py-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-center py-4 text-muted border-top bg-white">
    <p>&copy; {{ date('Y') }} Aplikasi Donasi - Proyek PPLG SMK</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>