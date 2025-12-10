@extends('layouts.app')

@section('content')

<section class="article-hero">
    <div class="container">
        <h1 class="fw-bold display-5 mb-2">Health & Wellness Articles</h1>
        <p class="text-white text-opacity-75 lead mb-4">Discover evidence-based insights for a healthier lifestyle</p>
        
        <div class="article-search-container">
            <input type="text" class="article-search-input" placeholder="Search articles, topics, or health concerns...">
            <button class="article-search-btn"><i class="bi bi-search"></i></button>
        </div>
    </div>
</section>

<section class="py-5 bg-light bg-opacity-10">
    <div class="container">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 gap-3">
            <div class="d-flex align-items-center gap-2 w-100 overflow-hidden">
                <span class="fw-bold text-dark me-2 small text-uppercase">Categories:</span>
                <div class="category-scroll d-flex gap-2">
                    <a href="#" class="category-pill active">All Articles</a>
                    <a href="#" class="category-pill"><i class="bi bi-moon-stars me-1"></i> Sleep</a>
                    <a href="#" class="category-pill"><i class="bi bi-apple me-1"></i> Nutrition</a>
                    <a href="#" class="category-pill"><i class="bi bi-person-walking me-1"></i> Lifestyle</a>
                    <a href="#" class="category-pill"><i class="bi bi-droplet me-1"></i> Hydration</a>
                    <a href="#" class="category-pill"><i class="bi bi-brain me-1"></i> Stress</a>
                </div>
            </div>

            <div class="flex-shrink-0">
                <div class="d-flex align-items-center">
                    <span class="text-muted small me-2">Sort by:</span>
                    <select class="form-select form-select-sm border-0 bg-white shadow-sm rounded-pill px-3 py-2 fw-medium" style="width: auto; cursor: pointer;">
                        <option>Most Recent</option>
                        <option>Most Popular</option>
                        <option>Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <p class="small text-muted mb-4 fw-bold">Showing 6 articles</p>

        <div class="row g-4">
            
            <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/young-man-sleeping-bed-night_23-2148053644.jpg" class="article-thumb" alt="Sleep">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-purple me-2">Sleep</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 5 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">The Science of Better Sleep: 7 Evidence-Based Tips</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Discover how to optimize your sleep quality with scientifically proven methods about circadian rhythms.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/handsome-confident-smiling-man-with-hands-crossed-chest_176420-18743.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">Dr. James Wilson</span>
                            </div>
                            <a href="{{ url('/article/heart-disease') }}" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/top-view-salad-bowl-with-fresh-ingredients_23-2148286908.jpg" class="article-thumb" alt="Nutrition">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-green me-2">Nutrition</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 8 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Plant-Based Nutrition: A Complete Guide for Beginners</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Explore the benefits of plant-based eating and learn how to create balanced, nutritious meals daily.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">Dr. Sarah Pale</span>
                            </div>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/woman-meditating-nature-sunset-yoga-pose_1150-8452.jpg" class="article-thumb" alt="Meditation">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-blue me-2">Stress</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 6 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Mindfulness Meditation: Reduce Stress in 10 Minutes</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Learn simple meditation techniques to manage stress and anxiety. Backed by research.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">Dr. Emily Chen</span>
                            </div>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/young-woman-drinking-water-from-bottle-after-fitness-training_1150-13725.jpg" class="article-thumb" alt="Hydration">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-blue me-2">Hydration</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 4 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Hydration 101: How Much Water Do You Really Need?</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Understand your body's hydration needs and debunk common water intake myths.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_273609-16320.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">Michael Roberts</span>
                            </div>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/healthy-lifestyle-fitness-sports-woman-running_1150-13724.jpg" class="article-thumb" alt="Lifestyle">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-orange me-2">Lifestyle</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 5 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Morning Routines of Highly Healthy People</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">How starting your day right can impact your energy levels and productivity throughout the day.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/portrait-successful-man-having-stubble-posing-with-broad-smile-keeping-arms-folded_171337-1267.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">David Park</span>
                            </div>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-md-6 col-lg-4">
                <div class="card article-card h-100 border-0">
                    <img src="https://img.freepik.com/free-photo/fresh-salmon-steak-with-ingredients_144627-14220.jpg" class="article-thumb" alt="Salmon">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge badge-green me-2">Nutrition</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i> 9 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Omega-3 Fatty Acids: Essential Nutrients for Brain</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Discover the cognitive benefits of omega-3s and the best food sources like Salmon and Chia seeds.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="https://img.freepik.com/free-photo/smiling-young-man-with-crossed-arms-outdoors_1140-255.jpg" class="author-img me-2" alt="Author">
                                <span class="small fw-bold text-dark">Dr. Lisa Ray</span>
                            </div>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm gap-2">
                    <li class="page-item disabled">
                        <a class="page-link rounded-2 border-0 bg-white shadow-sm" href="#" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link rounded-2 border-0 bg-primary text-white shadow-sm" href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-2 border-0 bg-white text-dark shadow-sm hover-shadow" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-2 border-0 bg-white text-dark shadow-sm hover-shadow" href="#">3</a></li>
                    <li class="page-item disabled"><span class="page-link rounded-2 border-0 bg-transparent text-muted">...</span></li>
                    <li class="page-item"><a class="page-link rounded-2 border-0 bg-white text-dark shadow-sm hover-shadow" href="#">12</a></li>
                    <li class="page-item">
                        <a class="page-link rounded-2 border-0 bg-white text-dark shadow-sm hover-shadow" href="#" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>

@endsection