@extends('layouts.app')

@section('content')

<section class="bg-primary text-white text-center" style="padding: 6rem 0 4rem 0;">
    <div class="container">
        <h1 class="fw-bold display-5 mb-3">Bagaimana HabitScore Bekerja?</h1>
        <p class="lead text-white text-opacity-75 mx-auto" style="max-width: 700px;">
            Teknologi kami menggabungkan standar medis terkini dengan analisis data pintar untuk memberikan panduan kesehatan yang akurat untuk Anda.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container py-4">
        
        <div class="row align-items-center mb-5 gx-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="d-flex align-items-start mb-3">
                    <div class="step-circle bg-primary me-3 shrink-0" style="width:50px; height:50px; font-size:1.5rem; margin:0;">1</div>
                    <div>
                        <h3 class="fw-bold mb-3">Pengumpulan Data Komprehensif</h3>
                        <p class="text-muted text-lg">
                            Proses dimulai dengan kuesioner interaktif yang mencakup 5 pilar kesehatan utama: Tidur, Nutrisi, Aktivitas Fisik, Hidrasi, dan Kesehatan Mental.
                        </p>
                        <ul class="text-muted mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>30+ Pertanyaan spesifik</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Adaptif sesuai gender & usia</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Hanya butuh 3-5 menit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="https://img.freepik.com/free-vector/online-survey-concept-illustration_114360-1549.jpg" class="img-fluid feature-step-img bg-white p-3" alt="Survey">
            </div>
        </div>

        <div class="row align-items-center mb-5 gx-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://img.freepik.com/free-vector/data-processing-concept-illustration_114360-1554.jpg" class="img-fluid feature-step-img bg-white p-3" alt="Analysis">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start mb-3">
                    <div class="step-circle bg-success me-3 flex-shrink-0" style="width:50px; height:50px; font-size:1.5rem; margin:0;">2</div>
                    <div>
                        <h3 class="fw-bold mb-3">Analisis Algoritma Cerdas</h3>
                        <p class="text-muted text-lg">
                            Jawaban Anda diolah menggunakan algoritma yang dikembangkan bersama ahli kesehatan. Kami membandingkan data Anda dengan standar kesehatan internasional (WHO).
                        </p>
                        <ul class="text-muted mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Penilaian risiko otomatis</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Identifikasi kebiasaan buruk</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Kalkulasi skor per kategori</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center gx-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="d-flex align-items-start mb-3">
                    <div class="step-circle me-3 flex-shrink-0" style="width:50px; height:50px; font-size:1.5rem; margin:0; background-color:#6f42c1;">3</div>
                    <div>
                        <h3 class="fw-bold mb-3">Rencana Aksi Personal</h3>
                        <p class="text-muted text-lg">
                            Anda tidak hanya mendapatkan angka, tapi panduan nyata. Kami memberikan rekomendasi langkah demi langkah yang mudah diterapkan dalam keseharian.
                        </p>
                        <ul class="text-muted mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#6f42c1;"></i>Daftar prioritas perbaikan</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#6f42c1;"></i>Artikel pendukung yang relevan</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#6f42c1;"></i>Tracking kemajuan berkala</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="https://img.freepik.com/free-vector/checklist-concept-illustration_114360-479.jpg" class="img-fluid feature-step-img bg-white p-3" alt="Result">
            </div>
        </div>

    </div>
</section>

<section class="py-5 bg-light bg-opacity-50">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Pertanyaan Umum (FAQ)</h2>
            <p class="text-muted">Hal yang sering ditanyakan pengguna kami.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Apakah HabitScore benar-benar gratis?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ya, fitur asesmen dasar dan rekomendasi kesehatan HabitScore 100% gratis untuk digunakan siapa saja.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Apakah data kesehatan saya aman?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Keamanan data adalah prioritas kami. Data Anda dienkripsi dan tidak akan pernah dijual atau dibagikan kepada pihak ketiga tanpa izin Anda.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Apakah hasil ini bisa menggantikan diagnosa dokter?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Tidak. HabitScore adalah alat evaluasi gaya hidup dan edukasi. Untuk diagnosa medis atau penanganan penyakit, harap selalu berkonsultasi dengan dokter profesional.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ url('/quiz') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Coba Sekarang</a>
        </div>

    </div>
</section>

@endsection