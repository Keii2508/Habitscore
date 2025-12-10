<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthCheck - Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="{{ url('/') }}">
                <i class="bi bi-heart-pulse-fill me-2"></i>HabitScore
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-medium">
                    <li class="nav-item px-2"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="{{ url('/cara-kerja') }}">Cara Kerja</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="{{ url('/articles') }}">Artikel</a></li>
                </ul>
                <div class="d-flex">
                     <a href="{{ url('/quiz') }}" class="btn btn-primary rounded-pill px-4 fw-semibold">Mulai Quiz</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer pt-5 mt-5">
        <div class="container pb-4">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 me-auto">
                    <h5 class="fw-bold"><i class="bi bi-heart-pulse-fill me-2 text-primary"></i>HealthCheck</h5>
                    <p class="small">Platform kesehatan terpercaya untuk membantu Anda menjalani hidup yang lebih sehat.</p>
                </div>
                <div class="col-lg-2 col-6">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#">Quiz Kesehatan</a></li>
                        <li class="mb-2"><a href="#">Artikel</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="bi bi-whatsapp me-2"></i> +62 812-3456-7890</li>
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container py-3 border-top border-secondary border-opacity-25 text-center small">
            © 2024 HealthCheck. All rights reserved.
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>