@extends('layouts.app')

@section('content')
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 pe-lg-5">
                    <h1 class="display-4 fw-bold text-dark mb-4">Cek Kesehatanmu dengan Mudah</h1>
                    <p class="lead text-muted mb-5">Evaluasi gaya hidup Anda dalam hitungan menit. Dapatkan rekomendasi
                        personal.</p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#" class="btn btn-primary btn-lg rounded-pill px-4">Mulai Tes Gratis</a>
                        <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-4">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="d-flex gap-4 text-muted small fw-medium">
                        <div><i class="bi bi-check-circle-fill text-success me-1"></i> 100% Gratis</div>
                        <div><i class="bi bi-check-circle-fill text-success me-1"></i> Data Aman</div>
                        <div><i class="bi bi-check-circle-fill text-success me-1"></i> 5 Menit</div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="card shadow-lg border-0 rounded-4 p-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title fw-bold mb-0">Statistik Pengguna</h5>
                                <i class="bi bi-graph-up-arrow text-primary fs-4"></i>
                            </div>
                            <div class="d-flex align-items-center bg-light rounded-3 p-3 mb-3">
                                <div class="me-3 text-primary fs-4"><i class="bi bi-journal-check"></i></div>
                                <div class="grow fw-medium">Quiz Diselesaikan</div>
                                <div class="fw-bold text-primary fs-5">12,543</div>
                            </div>
                            <div class="d-flex align-items-center bg-success bg-opacity-10 rounded-3 p-3 mb-3">
                                <div class="me-3 text-success fs-4"><i class="bi bi-people"></i></div>
                                <div class="grow fw-medium">Pengguna Aktif</div>
                                <div class="fw-bold text-success fs-5">8,921</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold mb-3">Topik Kesehatan Populer</h2>
                <p class="text-muted">Jelajahi berbagai aspek kesehatan dan temukan artikel yang sesuai.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 card-hover">
                        <div class="card-body p-3">
                            <div class="icon-circle bg-blue-soft"><i class="bi bi-moon-stars-fill fs-3"></i></div>
                            <h5 class="fw-bold mb-3">Kualitas Tidur</h5>
                            <p class="text-muted small mb-4">Pelajari cara meningkatkan kualitas tidur untuk kesehatan
                                optimal.</p>
                            <a href="#" class="text-decoration-none fw-semibold">Baca Artikel <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 card-hover">
                        <div class="card-body p-3">
                            <div class="icon-circle bg-green-soft"><i class="bi bi-apple fs-3"></i></div>
                            <h5 class="fw-bold mb-3">Nutrisi Seimbang</h5>
                            <p class="text-muted small mb-4">Panduan nutrisi yang tepat untuk mendukung gaya hidup sehat.
                            </p>
                            <a href="#" class="text-decoration-none fw-semibold text-success">Baca Artikel <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 card-hover">
                        <div class="card-body p-3">
                            <div class="icon-circle bg-purple-soft"><i class="bi bi-brain fs-3"></i></div>
                            <h5 class="fw-bold mb-3">Kesehatan Mental</h5>
                            <p class="text-muted small mb-4">Tips praktis untuk mengelola stres dan meningkatkan
                                kebahagiaan.</p>
                            <a href="#" class="text-decoration-none fw-semibold" style="color: #6f42c1">Baca Artikel
                                <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 card-hover">
                        <div class="card-body p-3">
                            <div class="icon-circle bg-cyan-soft"><i class="bi bi-droplet-fill fs-3"></i></div>
                            <h5 class="fw-bold mb-3">Hidrasi Optimal</h5>
                            <p class="text-muted small mb-4">Pentingnya minum air yang cukup untuk kebutuhan cairan harian.
                            </p>
                            <a href="#" class="text-decoration-none fw-semibold text-info">Baca Artikel <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light bg-opacity-50">
        <div class="container py-5">
            <div class="text-center mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold mb-3">Cara Kerja Quiz Kami</h2>
                <p class="text-muted">Proses sederhana dalam 3 langkah untuk mendapatkan rekomendasi kesehatan personal.</p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-lg-4">
                    <div class="step-circle bg-primary">1</div>
                    <div class="card border-0 shadow-sm rounded-4 p-2 h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-file-text fs-1 text-primary mb-3"></i>
                            <h5 class="fw-bold">Isi Kuesioner</h5>
                            <p class="text-muted small">Jawab pertanyaan singkat tentang gaya hidup, pola makan, aktivitas
                                fisik, dan kebiasaan tidur Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="step-circle bg-success">2</div>
                    <div class="card border-0 shadow-sm rounded-4 p-2 h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-cpu fs-1 text-success mb-3"></i>
                            <h5 class="fw-bold">Analisis Otomatis</h5>
                            <p class="text-muted small">Sistem kami menganalisis jawaban Anda dan menghitung skor kesehatan
                                berdasarkan standar medis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="step-circle" style="background-color: #6f42c1;">3</div>
                    <div class="card border-0 shadow-sm rounded-4 p-2 h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-lightbulb fs-1 mb-3" style="color: #6f42c1;"></i>
                            <h5 class="fw-bold">Dapatkan Rekomendasi</h5>
                            <p class="text-muted small">Terima saran personal dan tips praktis untuk meningkatkan kesehatan
                                dan kualitas hidup Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="fw-bold mb-4">Mengapa Memilih HealthCheck?</h2>
                    <p class="text-muted lead mb-5">Platform kesehatan terpercaya dengan pendekatan personal untuk setiap
                        pengguna.</p>

                    <div class="d-flex mb-4">
                        <div class="icon-circle bg-blue-soft me-3 shrink-0"
                            style="width: 50px; height: 50px; margin-bottom: 0;">
                            <i class="bi bi-person-check-fill fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Berbasis Riset Medis</h5>
                            <p class="text-muted small mb-0">Setiap rekomendasi didukung oleh penelitian dan standar
                                kesehatan internasional.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="icon-circle bg-green-soft me-3 shrink-0"
                            style="width: 50px; height: 50px; margin-bottom: 0;">
                            <i class="bi bi-shield-lock-fill fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Privasi Terjamin</h5>
                            <p class="text-muted small mb-0">Data kesehatan Anda terenkripsi dan tidak akan dibagikan
                                kepada pihak ketiga.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon-circle bg-purple-soft me-3 shrink-0"
                            style="width: 50px; height: 50px; margin-bottom: 0;">
                            <i class="bi bi-phone-fill fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Akses Kapan Saja</h5>
                            <p class="text-muted small mb-0">Gunakan di perangkat apa pun, kapan saja, di mana saja dengan
                                koneksi internet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card stats-gradient-card rounded-4 shadow-lg p-5 text-center">
                        <div class="row g-4">
                            <div class="col-6 mb-4">
                                <h2 class="fw-bold display-5 mb-0">15,000+</h2>
                                <p class="text-white text-opacity-75 mb-0">Pengguna Terdaftar</p>
                            </div>
                            <div class="col-6 mb-4">
                                <h2 class="fw-bold display-5 mb-0">500+</h2>
                                <p class="text-white text-opacity-75 mb-0">Artikel Kesehatan</p>
                            </div>
                            <div class="col-12 pt-3 border-top border-white border-opacity-25">
                                <h2 class="fw-bold display-5 mb-0">4.9/5.0</h2>
                                <p class="text-white text-opacity-75 mb-0">Rating Kepuasan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="card stats-gradient-card rounded-4 shadow-lg p-5 text-center">
                <h2 class="fw-bold display-6 mb-4">Siap Untuk Hidup Lebih Sehat?</h2>
                <p class="lead text-white text-opacity-75 mb-4">Mulai perjalanan kesehatan Anda hari ini.</p>
                <div>
                    <a href="{{ url('/quiz') }}"
                        class="btn btn-light text-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">Mulai Quiz
                        Sekarang</a>
                </div>
            </div>
        </div>
    </section>
@endsection
