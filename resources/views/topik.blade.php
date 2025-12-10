@extends('layouts.app')

@section('content')

<section class="bg-light py-5 text-center">
    <div class="container py-4">
        <h1 class="fw-bold display-5 mb-3">Jelajahi Topik Kesehatan</h1>
        <p class="lead text-muted mx-auto mb-4" style="max-width: 600px;">
            Temukan panduan mendalam untuk setiap aspek kesehatan Anda. Pilih kategori di bawah ini untuk memulai.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container pb-5">
        <div class="row g-4">
            
            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/articles') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header bg-primary">
                            <i class="bi bi-moon-stars-fill"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Kualitas Tidur</h4>
                            <p class="text-muted small mb-3">Strategi untuk tidur lebih nyenyak, mengatasi insomnia, dan memahami ritme sirkadian.</p>
                            <span class="fw-bold text-primary text-sm">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/articles') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header bg-success">
                            <i class="bi bi-apple"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Nutrisi & Diet</h4>
                            <p class="text-muted small mb-3">Panduan makanan sehat, resep bergizi, dan tips mengelola berat badan ideal.</p>
                            <span class="fw-bold text-success text-sm">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/articles') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header" style="background-color: #6f42c1;">
                            <i class="bi bi-brain"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Kesehatan Mental</h4>
                            <p class="text-muted small mb-3">Manajemen stres, mindfulness, kecemasan, dan menjaga kesejahteraan emosional.</p>
                            <span class="fw-bold text-sm" style="color: #6f42c1;">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/articles') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header bg-info">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Hidrasi</h4>
                            <p class="text-muted small mb-3">Pentingnya air bagi tubuh, tanda dehidrasi, dan tips minum lebih banyak.</p>
                            <span class="fw-bold text-info text-sm">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/article/heart-disease') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header bg-danger">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Jantung Sehat</h4>
                            <p class="text-muted small mb-3">Pencegahan penyakit jantung, kolesterol, tekanan darah, dan kardio.</p>
                            <span class="fw-bold text-danger text-sm">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ url('/articles') }}" class="text-decoration-none text-dark">
                    <div class="card topic-card-lg">
                        <div class="topic-header bg-warning text-white">
                            <i class="bi bi-bicycle"></i>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold mb-2">Aktivitas Fisik</h4>
                            <p class="text-muted small mb-3">Program olahraga rumah, gym, lari, dan tips membangun kebiasaan aktif.</p>
                            <span class="fw-bold text-warning text-sm">Lihat Artikel <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h2 class="fw-bold">Belum yakin topik mana yang Anda butuhkan?</h2>
        <p class="mb-4 text-white text-opacity-75">Ikuti kuis kesehatan kami untuk mengetahui prioritas kesehatan Anda saat ini.</p>
        <a href="{{ url('/quiz') }}" class="btn btn-light text-primary rounded-pill px-4 fw-bold">Mulai Quiz Personal</a>
    </div>
</section>

@endsection