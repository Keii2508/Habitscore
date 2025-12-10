@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <!-- HEADER -->
    <div class="text-center mb-5 mt-4">
        <div class="result-check-icon">
            <i class="bi bi-check-lg"></i>
        </div>
        <h1 class="fw-bold mb-3">{{ __('ui.result_title') }}</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            {{ __('ui.result_subtitle') }}
        </p>
    </div>

    <div class="row g-4 mb-5 justify-content-center">
        @foreach($results as $res)
            @php
               
                $catName = strtolower($res['category']);
                $icon = 'bi-activity'; 
                $bgClass = 'bg-blue-soft'; 
                $textClass = 'text-primary';
                $barClass = 'bg-primary';

                // 1. SLEEP
                if(str_contains($catName, 'tidur') || str_contains($catName, 'sleep')) { 
                    $icon = 'bi-moon-stars-fill'; 
                    $bgClass = 'bg-blue-soft'; 
                    $textClass = 'text-primary'; 
                    $barClass = 'bg-primary';
                }
                // 2. NUTRITION
                elseif(str_contains($catName, 'nutri') || str_contains($catName, 'makan')) { 
                    $icon = 'bi-apple'; 
                    $bgClass = 'bg-green-soft'; 
                    $textClass = 'text-success'; 
                    $barClass = 'bg-success';
                }
                // 3. HYDRATION
                elseif(str_contains($catName, 'hidra') || str_contains($catName, 'air') || str_contains($catName, 'hydra')) { 
                    $icon = 'bi-droplet-fill'; 
                    $bgClass = 'bg-orange-soft'; 
                    $textClass = 'text-orange'; 
                    $barClass = 'bg-orange';
                }
                // 4. PHYSICAL ACTIVITY
                elseif(str_contains($catName, 'fisik') || str_contains($catName, 'raga') || str_contains($catName, 'activity') || str_contains($catName, 'exercise')) { 
                    $icon = 'bi-person-walking'; 
                    $bgClass = 'bg-teal-soft'; 
                    $textClass = 'text-teal'; 
                    $barClass = 'bg-teal';
                }
                // 5. MENTAL HEALTH
                elseif(str_contains($catName, 'mental') || str_contains($catName, 'stress')) { 
                    $icon = 'bi-balloon-heart-fill'; 
                    $bgClass = 'bg-purple-soft'; 
                    $textClass = 'text-purple'; 
                    $barClass = 'bg-purple'; 
                }
                // 6. SCREEN TIME 
                elseif(str_contains($catName, 'screen') || str_contains($catName, 'layar') || str_contains($catName, 'waktu')) { 
                    $icon = 'bi-clock-history'; 
                    $bgClass = 'bg-cyan-soft'; 
                    $textClass = 'text-info'; 
                    $barClass = 'bg-info'; 
                }
                // 7. BODY COMPOSITION / BMI 
                elseif (str_contains($catName, 'bmi') || str_contains($catName, 'weight') || str_contains($catName, 'body') || str_contains($catName, 'komposisi')) {
                    $icon = 'bi-person-arms-up'; 
                    $bgClass = 'bg-secondary-soft'; 
                    $textClass = 'text-secondary'; 
                    $barClass = 'bg-secondary';
                }

                // Logic Status Text
                $status = __('ui.status_improvement');
                if($res['score'] >= 80) $status = __('ui.status_excellent');
                elseif($res['score'] >= 60) $status = __('ui.status_good');
            @endphp

            <div class="col-md-6 col-lg-3">
                <div class="score-card h-100">
                    <div class="icon-circle {{ $bgClass }} mx-auto"><i class="bi {{ $icon }} fs-4"></i></div>
                    <h6 class="fw-bold mt-3 mb-0">{{ $res['category'] }}</h6>
                    <div class="score-value {{ $textClass }}">
                        {{ $res['score'] }}
                    </div>

                    <!-- Extra Info BMI -->
                    @if(isset($res['extra_info']) && $res['extra_info'])
                        <small class="text-muted d-block mb-2">(BMI: {{ $res['extra_info'] }})</small>
                    @endif

                    <div class="progress progress-thin">
                        <div class="progress-bar {{ $barClass }}" role="progressbar" style="width: {{ $res['score'] }}%"></div>
                    </div>
                    <small class="text-muted mt-2 d-block">{{ $status }}</small>
                </div>
            </div>
        @endforeach
    </div>

    <!-- SEPARATOR TEXT -->
    <div class="text-center mb-4">
        <h3 class="fw-bold">Rekomendasi Personalisasi</h3>
    </div>

    <!-- 2. REKOMENDASI ROW -->
    <div class="row g-4 mb-5">
        <!-- Kolom Kiri: Prioritas Utama (Bad Habits) -->
        <div class="col-lg-6">
            <div class="rec-section-card h-100">
                <h5 class="fw-bold mb-4 text-orange"><i class="bi bi-exclamation-triangle-fill me-2"></i>{{ __('ui.priority_title') }}</h5>
                
                @php 
                    $badHabits = collect($results)->where('type', 'bad_habit'); 
                @endphp

                @if($badHabits->isEmpty())
                    <div class="text-center py-4 text-muted">
                        <i class="bi bi-emoji-smile fs-1 d-block mb-2"></i>
                        {{ __('ui.no_priority') }}
                    </div>
                @else
                    @foreach($badHabits as $res)
                    <div class="rec-item priority">
                        <div class="icon-circle bg-white text-orange shadow-sm shrink-0" style="width: 40px; height: 40px; margin:0;">
                            <i class="bi bi-exclamation-lg fs-6"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ $res['title'] }}</h6>
                            <p class="small text-muted mb-2">{{ $res['description'] }}</p>
                            <span class="badge bg-white text-orange border border-warning">Skor: {{ $res['score'] }}/100</span>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Kolom Kanan: Kebiasaan Baik (Good Habits) -->
        <div class="col-lg-6">
            <div class="rec-section-card h-100">
                <h5 class="fw-bold mb-4 text-success"><i class="bi bi-check-circle-fill me-2"></i>{{ __('ui.good_habit_title') }}</h5>
                
                @php 
                    $goodHabits = collect($results)->where('type', 'good_habit'); 
                @endphp

                @if($goodHabits->isEmpty())
                    <div class="text-center py-4 text-muted">
                        {{ __('ui.no_good_habit') }}
                    </div>
                @else
                    @foreach($goodHabits as $res)
                    <div class="rec-item good">
                        <div class="icon-circle bg-white text-success shadow-sm shrink-0" style="width: 40px; height: 40px; margin:0;">
                            <i class="bi bi-check-lg fs-6"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ $res['title'] }}</h6>
                            <p class="small text-muted mb-2">{{ $res['description'] }}</p>
                            <span class="badge bg-white text-success border border-success">Skor: {{ $res['score'] }}/100</span>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <h3 class="fw-bold">{{ __('ui.detail_title') }}</h3>
    </div>

    <!-- 3. DETAIL CARDS (Menampilkan 3 Rekomendasi Terpenting/Terendah) -->
    <div class="row g-4 mb-5">
        @foreach(collect($results)->sortBy('score')->take(3) as $res)
            @php
                // Copy logic warna icon lagi utk keseragaman
                $catName = strtolower($res['category']);
                $icon = 'bi-activity'; $bgClass = 'bg-blue-soft'; $textClass = 'text-primary';
                
                if(str_contains($catName, 'tidur') || str_contains($catName, 'sleep')) { $icon = 'bi-moon-stars'; $bgClass = 'bg-blue-soft'; $textClass = 'text-primary'; }
                elseif(str_contains($catName, 'nutri') || str_contains($catName, 'makan')) { $icon = 'bi-apple'; $bgClass = 'bg-green-soft'; $textClass = 'text-success'; }
                elseif(str_contains($catName, 'hidra') || str_contains($catName, 'air')) { $icon = 'bi-droplet'; $bgClass = 'bg-orange-soft'; $textClass = 'text-orange'; }
                elseif(str_contains($catName, 'fisik') || str_contains($catName, 'exercise')) { $icon = 'bi-person-walking'; $bgClass = 'bg-teal-soft'; $textClass = 'text-teal'; }
                elseif(str_contains($catName, 'mental')) { $icon = 'bi-brain'; $bgClass = 'bg-purple-soft'; $textClass = 'text-purple'; }
            @endphp

            <div class="col-md-4">
                <div class="detail-card h-100">
                    <div class="icon-circle {{ $bgClass }} mb-3" style="width: 50px; height: 50px;">
                        <i class="bi {{ $icon }} {{ $textClass }}"></i>
                    </div>
                    <h6 class="fw-bold">{{ $res['title'] }}</h6>
                    <!-- Menggunakan Description sebagai list item sederhana -->
                    <div class="text-muted small ps-1 mt-3 mb-0" style="line-height: 1.8;">
                        {{ $res['description'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- BUTTONS -->
    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('quiz.index') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
            <i class="bi bi-arrow-repeat me-2"></i> {{ __('ui.btn_retake') }}
        </a>
        <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4 py-2 rounded-pill bg-white">
            <i class="bi bi-house-door-fill me-2"></i> {{ __('ui.btn_home') }}
        </a>
    </div>

    <!-- TIPS BOX -->
    <div class="tips-box mx-auto" style="max-width: 800px;">
        <h6 class="fw-bold mb-2"><i class="bi bi-lightbulb-fill text-warning me-2"></i>{{ __('ui.tips_title') }}</h6>
        <p class="small text-muted mb-0">
            {{ __('ui.tips_desc') }}
        </p>
    </div>

</div>

@endsection