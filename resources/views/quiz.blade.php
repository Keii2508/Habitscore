@extends('layouts.app')

@section('content')
    <section class="quiz-section py-5">
        <div class="container">
            <!-- FORM WRAPPER: Penting untuk submit data ke Laravel -->
            <form id="quizForm" action="{{ route('quiz.submit') }}" method="POST">
                @csrf
                <!-- Container untuk menyimpan input hidden jawaban user -->
                <div id="answers-hidden-container"></div>

                <div class="card quiz-card w-100 mx-auto" style="max-width: 1000px;">

                    <div class="quiz-header">
                        <div
                            class="d-flex justify-content-between align-items-center mb-2 text-white text-opacity-75 small fw-medium">
                            <span id="question-tracker">Loading...</span>
                            <span id="percentage-tracker">0% Complete</span>
                        </div>
                        <div class="progress-track">
                            <div id="progress-bar-fill" class="progress-fill" style="width: 0%;"></div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row g-0" style="min-height: 600px;">

                            <div class="col-lg-7 p-4 p-md-5 d-flex flex-column justify-content-center">

                                <!-- Kategori Tag -->
                                <div class="quiz-tag mb-3" id="category-tag">
                                    <i class="bi bi-tag-fill me-2"></i> General
                                </div>

                                <!-- Pertanyaan -->
                                <div class="d-flex align-items-center mb-2" style="min-height: 90px;">
                                    <h2 class="fw-bold text-dark m-0" id="question-text">
                                        {{ __('ui.loading') }} <!-- Menggunakan file lang -->
                                    </h2>
                                </div>

                                <div style="min-height: 50px;">
                                    <p class="text-muted" id="question-desc">Please wait...</p>
                                </div>

                                <!-- Opsi Jawaban (Button/Input) -->
                                <div id="options-container" class="d-flex flex-column gap-3 mb-4 mt-2">
                                    <!-- Buttons will be injected here by JS -->
                                </div>

                                <!-- Info Box (Tahukah Anda) -->
                                <div class="info-box d-flex gap-3 align-items-center" style="min-height: 110px;">
                                    <div class="fs-4 shrink-0"><i class="bi bi-lightbulb-fill"></i></div>
                                    <div>
                                        <h6 class="fw-bold mb-1">{{ __('ui.did_you_know') }}</h6>
                                        <p class="mb-0 small text-white text-opacity-90" id="fact-text">
                                            ...
                                        </p>
                                    </div>
                                </div>

                                <!-- Navigasi -->
                                <div class="d-flex gap-3 mt-4">
                                    <button type="button" onclick="prevQuestion()" id="btn-back"
                                        class="btn btn-outline-secondary px-4 py-2 rounded-3 fw-semibold" disabled>
                                        <i class="bi bi-arrow-left me-2"></i> {{ __('ui.btn_back') }}
                                    </button>
                                    <button type="button" onclick="nextQuestion()" id="btn-next"
                                        class="btn btn-primary px-4 py-2 rounded-3 fw-semibold grow">
                                        {{ __('ui.btn_next') }} <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Gambar -->
                            <div class="col-lg-5 d-none d-lg-block">
                                <div class="h-100 w-100 bg-light d-flex align-items-center justify-content-center overflow-hidden"
                                    style="background-color: #e0e7ff;">
                                   <img id="question-image"src="{{ asset('images/question-placeholder.png') }}"  {{-- atau .jpg --}}
                                   alt="Illustration"
                                   style="width: 100%; height: 100%; object-fit: cover;">



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        
        const questions = @json($jsQuestions ?? []);

        
        let currentQuestionIndex = 0;
        let userAnswers = {};

        function loadQuestion() {
            
            if (!questions || questions.length === 0) {
                document.getElementById('question-text').innerText = "Tidak ada pertanyaan ditemukan di Database.";
                return;
            }

            const q = questions[currentQuestionIndex];
            const total = questions.length;
            const progress = ((currentQuestionIndex) / total) * 100;

            let trackerText = "{{ __('ui.question_tracker') }}";
            trackerText = trackerText.replace(':current', currentQuestionIndex + 1).replace(':total', total);

            document.getElementById('question-tracker').innerText = trackerText;
            document.getElementById('percentage-tracker').innerText = `${Math.round(progress)}% Complete`;
            document.getElementById('progress-bar-fill').style.width = `${progress}%`;

            
            document.getElementById('category-tag').innerHTML = `<i class="bi bi-tag-fill me-2"></i> ${q.category}`;
            document.getElementById('question-text').innerText = q.text;
            document.getElementById('question-desc').innerText = q.desc || '';
            document.getElementById('fact-text').innerText = q.fact || '';
            document.getElementById('question-image').src = q.image;

            const optionsContainer = document.getElementById('options-container');
            optionsContainer.innerHTML = '';

            
            if (q.input_type === 'scale') {
                q.options.forEach(option => {
                    const btn = document.createElement('button');
                    const isSelected = userAnswers[q.id] == option.id;

                    btn.type = "button";
                    btn.className =
                        `btn text-start p-3 rounded-3 fw-medium option-btn w-100 ${isSelected ? 'btn-primary text-white' : 'btn-outline-dark'}`;
                    btn.innerHTML = option.text;

                    btn.onclick = function() {
                        selectOption(this, q.id, option.id);
                    };
                    optionsContainer.appendChild(btn);
                });
            } else if (q.input_type === 'number') {
                const inputGroup = document.createElement('div');
                inputGroup.className = 'input-group mb-3';

                const input = document.createElement('input');
                input.type = 'number';
                input.className = 'form-control p-3';
                input.placeholder = `Masukkan ${q.variable_name}...`;
                input.value = userAnswers[q.variable_name] || '';

                input.oninput = function() {
                    saveNumberInput(q.variable_name, this.value);
                };

                const addon = document.createElement('span');
                addon.className = 'input-group-text';
                addon.innerText = q.variable_name === 'weight' ? 'kg' : 'cm';

                inputGroup.appendChild(input);
                inputGroup.appendChild(addon);
                optionsContainer.appendChild(inputGroup);
            }

          
            document.getElementById('btn-back').disabled = (currentQuestionIndex === 0);

            const nextBtn = document.getElementById('btn-next');
            if (currentQuestionIndex === questions.length - 1) {
                nextBtn.innerHTML = '{{ __('ui.btn_finish') }} <i class="bi bi-check-circle-fill ms-2"></i>';
            } else {
                nextBtn.innerHTML = '{{ __('ui.btn_next') }} <i class="bi bi-arrow-right ms-2"></i>';
            }
        }

        function selectOption(btn, questionId, optionId) {
            const allBtns = document.querySelectorAll('.option-btn');
            allBtns.forEach(b => {
                b.classList.remove('btn-primary', 'text-white');
                b.classList.add('btn-outline-dark');
            });
            btn.classList.remove('btn-outline-dark');
            btn.classList.add('btn-primary', 'text-white');

            userAnswers[questionId] = optionId;
            updateHiddenInputs();
        }

        function saveNumberInput(varName, value) {
            userAnswers[varName] = value;
            updateHiddenInputs();
        }

        function updateHiddenInputs() {
            const container = document.getElementById('answers-hidden-container');
            container.innerHTML = '';
            for (const [key, value] of Object.entries(userAnswers)) {
                const input = document.createElement('input');
                input.type = 'hidden';
                if (!isNaN(key)) {
                    input.name = `answers[${key}]`;
                } else {
                    input.name = `bmi[${key}]`;
                }
                input.value = value;
                container.appendChild(input);
            }
        }

        function nextQuestion() {
            const q = questions[currentQuestionIndex];

           
            if (q.input_type === 'scale' && !userAnswers[q.id]) {
                alert("{{ __('ui.alert_select') }}");
                return;
            }
            if (q.input_type === 'number' && !userAnswers[q.variable_name]) {
                alert("{{ __('ui.alert_input') }}");
                return;
            }

            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                loadQuestion();
            } else {
                document.getElementById('quizForm').submit();
            }
        }

        function prevQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                loadQuestion();
            }
        }

     
        document.addEventListener('DOMContentLoaded', loadQuestion);
    </script>

    <style>
        .option-btn {
            border: 1px solid #e0e0e0;
            transition: all 0.2s;
        }

        .option-btn:hover {
            background-color: #f8f9fa;
            border-color: #4e60ff;
            color: #4e60ff;
        }

        .option-btn.btn-primary:hover {
            background-color: #3a4bcf;
            color: white;
        }
    </style>
@endsection
