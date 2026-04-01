@extends('layouts.app')

@section('content')
<div class="container text-center">

    <!-- HERO SECTION -->
    <div class="hero-section rounded-3 shadow mb-5 py-5">
        <h1 class="display-4 fw-bold">
            Bantu Sesama, Ubah Dunia
        </h1>

        <p class="lead mt-3">
            Platform donasi digital yang aman, transparan, dan terpercaya
            untuk menyalurkan kebaikan Anda.
        </p>

        <a href="{{ route('donasi.create') }}" 
           class="btn btn-light btn-lg px-5 mt-4 fw-bold text-success">
            Donasi Sekarang
        </a>
    </div>

    <!-- FITUR -->
    <div class="row text-start mt-5">

        <!-- MUDAH -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h3 class="fw-bold">Mudah</h3>
                <p class="text-muted">
                    Isi data singkat, pilih kategori, dan kirim donasi Anda
                    dalam hitungan menit.
                </p>
            </div>
        </div>

        <!-- TRANSPARAN -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h3 class="fw-bold">Transparan</h3>
                <p class="text-muted">
                    Semua donasi yang masuk tercatat secara sistematis
                    dalam laporan riwayat donasi.
                </p>
            </div>
        </div>

        <!-- BERMANFAAT -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h3 class="fw-bold">Bermanfaat</h3>
                <p class="text-muted">
                    Pilih kategori yang tepat untuk memastikan donasi Anda
                    sampai ke pihak yang membutuhkan.
                </p>
            </div>
        </div>

    </div>

</div>
@endsection