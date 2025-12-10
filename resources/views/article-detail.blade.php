@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent p-0 small">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-muted">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/articles') }}" class="text-decoration-none text-muted">Articles</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Heart Health</li>
        </ol>
    </nav>

    <div class="row g-5">
        
        <div class="col-lg-8">
            
            <span class="badge bg-danger bg-opacity-10 text-danger mb-3 px-3 py-2 rounded-pill">Heart Health</span>
            <h1 class="fw-bold display-5 mb-3">Understanding Heart Disease: Prevention, Symptoms, and Treatment Options</h1>
            <p class="lead text-muted mb-4">Comprehensive guide to cardiovascular health, including risk factors, early warning signs, and evidence-based prevention strategies.</p>

            <div class="article-meta border-bottom pb-4 mb-4">
                <div class="d-flex align-items-center">
                    <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg" class="author-avatar-sm" alt="Dr. Sarah">
                    <div class="lh-1">
                        <span class="fw-bold text-dark d-block">Dr. Sarah Johnson</span>
                        <small class="text-muted">Cardiologist • March 15, 2024</small>
                    </div>
                </div>
                <div class="ms-auto d-flex gap-3 small">
                    <span><i class="bi bi-clock me-1"></i> 8 min read</span>
                    <span><i class="bi bi-bookmark me-1"></i> Save</span>
                    <span><i class="bi bi-share me-1"></i> Share</span>
                </div>
            </div>

            <img src="https://img.freepik.com/free-vector/human-internal-organ-with-heart_1308-111425.jpg" class="img-fluid rounded-4 mb-5 w-100" alt="Heart Anatomy">

            <div class="article-content">
                <p>Heart disease remains the leading cause of death globally, affecting millions of people each year. However, many forms of cardiovascular disease are preventable through lifestyle modifications, early detection, and appropriate medical intervention.</p>
                
                <h2>What is Heart Disease?</h2>
                <p>Heart disease, also known as cardiovascular disease, refers to a range of conditions that affect the heart and blood vessels. The most common type is coronary artery disease, which occurs when the vessels that supply blood to the heart become narrowed or blocked due to plaque buildup.</p>

                <div class="callout-box">
                    <h6 class="fw-bold text-primary mb-2"><i class="bi bi-info-circle-fill me-2"></i>Important Note</h6>
                    <p class="mb-0 small text-muted">If you experience chest pain, shortness of breath, or other concerning symptoms, seek immediate medical attention. Early intervention can be life-saving.</p>
                </div>

                <h2>Common Risk Factors</h2>
                <p>Several factors can increase your risk of developing heart disease. While some risk factors cannot be changed, many are modifiable through lifestyle adjustments:</p>

                <div class="row g-4 my-3">
                    <div class="col-md-6">
                        <div class="risk-box non-modifiable">
                            <h6 class="fw-bold text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Non-Modifiable Factors</h6>
                            <ul class="risk-list text-muted">
                                <li>Age (men 45+, women 55+)</li>
                                <li>Family history of heart disease</li>
                                <li>Gender (men at higher risk)</li>
                                <li>Ethnicity and genetics</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="risk-box modifiable">
                            <h6 class="fw-bold text-success"><i class="bi bi-check-circle-fill me-2"></i>Modifiable Factors</h6>
                            <ul class="risk-list text-muted">
                                <li>High blood pressure</li>
                                <li>High cholesterol levels</li>
                                <li>Smoking and tobacco use</li>
                                <li>Physical inactivity</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h2>Prevention Strategies</h2>
                <p class="mb-4">The good news is that heart disease is largely preventable. By adopting healthy lifestyle habits and working with your healthcare provider, you can significantly reduce your risk.</p>

                <div class="strategy-item">
                    <div class="strategy-icon"><i class="bi bi-egg-fried"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Maintain a Heart-Healthy Diet</h6>
                        <p class="small text-muted mb-0">Focus on fruits, vegetables, whole grains, lean proteins, and healthy fats. Limit sodium and processed foods.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-icon"><i class="bi bi-bicycle"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Stay Physically Active</h6>
                        <p class="small text-muted mb-0">Aim for at least 150 minutes of moderate aerobic activity or 75 minutes of vigorous activity per week.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-icon"><i class="bi bi-slash-circle"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Quit Smoking and Limit Alcohol</h6>
                        <p class="small text-muted mb-0">Smoking damages blood vessels and increases heart disease risk. If you drink alcohol, do so in moderation.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="sidebar-widget bg-white shadow-sm">
                <h5 class="fw-bold mb-4"><i class="bi bi-star-fill text-warning me-2"></i>Recommended Reading</h5>
                
                <a href="#" class="mini-article">
                    <img src="https://img.freepik.com/free-photo/fresh-vegetables-with-dumbbells_23-2148519782.jpg" alt="Diet">
                    <div>
                        <h6 class="fw-bold small mb-1 text-dark line-clamp-2">10 Heart-Healthy Foods to Add to Your Diet</h6>
                        <small class="text-muted" style="font-size: 0.75rem;">5 min read</small>
                    </div>
                </a>

                <a href="#" class="mini-article">
                    <img src="