<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Question;
use App\Models\Option;
use App\Models\Recommendation;

class QuizSeeder extends Seeder
{
    public function run()
    {
    
        // 1. SLEEP & REST
       
        $sleep = Category::create([
            'slug' => 'sleep',
            'name' => json_encode(['id' => 'Tidur & Istirahat', 'en' => 'Sleep & Rest'])
        ]);

        $q1 = Question::create([
            'category_id' => $sleep->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Berapa rata-rata durasi tidur Anda setiap malam?', 'en' => 'What is your average sleep duration per night?']),
            'description' => json_encode(['id' => 'Tidur yang cukup sangat penting untuk regenerasi sel tubuh.', 'en' => 'Sufficient sleep is vital for cell regeneration.']),
            'fact' => json_encode(['id' => 'Orang dewasa membutuhkan 7-9 jam tidur.', 'en' => 'Adults need 7-9 hours of sleep.']),
            'image' => 'https://img.freepik.com/free-vector/sleep-analysis-concept-illustration_114360-6425.jpg?w=740'
        ]);
        Option::create(['question_id' => $q1->id, 'score' => 20, 'option_text' => json_encode(['id' => '< 5 jam', 'en' => '< 5 hours'])]);
        Option::create(['question_id' => $q1->id, 'score' => 60, 'option_text' => json_encode(['id' => '5 - 6 jam', 'en' => '5 - 6 hours'])]);
        Option::create(['question_id' => $q1->id, 'score' => 100, 'option_text' => json_encode(['id' => '7 - 8 jam (Ideal)', 'en' => '7 - 8 hours (Ideal)'])]);
        Option::create(['question_id' => $q1->id, 'score' => 80, 'option_text' => json_encode(['id' => '> 9 jam', 'en' => '> 9 hours'])]);

        Recommendation::create([
            'category_id' => $sleep->id, 'min_score' => 0, 'max_score' => 60, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Perbaiki Waktu Tidur Anda', 'en' => 'Fix Your Sleep Schedule']),
            'description' => json_encode(['id' => 'Kurang tidur meningkatkan risiko stres. Usahakan tidur 7 jam.', 'en' => 'Lack of sleep increases stress risks. Aim for 7 hours.'])
        ]);
        Recommendation::create([
            'category_id' => $sleep->id, 'min_score' => 61, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Kualitas Tidur Baik', 'en' => 'Good Sleep Quality']),
            'description' => json_encode(['id' => 'Pertahankan pola tidur Anda.', 'en' => 'Maintain your sleep pattern.'])
        ]);

        // 2. NUTRITION

        $nutrition = Category::create([
            'slug' => 'nutrition',
            'name' => json_encode(['id' => 'Nutrisi', 'en' => 'Nutrition'])
        ]);

        $q2 = Question::create([
            'category_id' => $nutrition->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Seberapa sering Anda makan buah dan sayur?', 'en' => 'How often do you eat fruits and vegetables?']),
            'description' => json_encode(['id' => 'Sayur dan buah mengandung serat dan vitamin penting.', 'en' => 'Fruits and veggies contain fiber and essential vitamins.']),
            'fact' => json_encode(['id' => 'WHO menyarankan 400g buah & sayur per hari.', 'en' => 'WHO recommends 400g of fruits & veggies daily.']),
            'image' => 'https://img.freepik.com/free-vector/healthy-options-concept-illustration_114360-3972.jpg?w=740'
        ]);
        Option::create(['question_id' => $q2->id, 'score' => 100, 'option_text' => json_encode(['id' => 'Setiap hari', 'en' => 'Every day'])]);
        Option::create(['question_id' => $q2->id, 'score' => 70, 'option_text' => json_encode(['id' => '3-4 kali seminggu', 'en' => '3-4 times a week'])]);
        Option::create(['question_id' => $q2->id, 'score' => 40, 'option_text' => json_encode(['id' => 'Jarang sekali', 'en' => 'Rarely'])]);
        Option::create(['question_id' => $q2->id, 'score' => 10, 'option_text' => json_encode(['id' => 'Tidak pernah', 'en' => 'Never'])]);

        Recommendation::create([
            'category_id' => $nutrition->id, 'min_score' => 0, 'max_score' => 50, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Kurang Serat & Vitamin', 'en' => 'Lack of Fiber & Vitamins']),
            'description' => json_encode(['id' => 'Mulai tambahkan satu porsi buah di setiap makan siang.', 'en' => 'Start adding one portion of fruit to every lunch.'])
        ]);
        Recommendation::create([
            'category_id' => $nutrition->id, 'min_score' => 51, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Pola Makan Sehat', 'en' => 'Healthy Diet']),
            'description' => json_encode(['id' => 'Konsumsi nutrisi Anda sudah sangat baik.', 'en' => 'Your nutrient intake is excellent.'])
        ]);

      
        // 3. HYDRATION
    
        $hydration = Category::create([
            'slug' => 'hydration',
            'name' => json_encode(['id' => 'Hidrasi', 'en' => 'Hydration'])
        ]);

        $q3 = Question::create([
            'category_id' => $hydration->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Berapa gelas air putih yang Anda minum sehari?', 'en' => 'How many glasses of water do you drink daily?']),
            'description' => json_encode(['id' => 'Hidrasi yang baik membantu fokus dan pencernaan.', 'en' => 'Good hydration helps focus and digestion.']),
            'fact' => json_encode(['id' => 'Kekurangan cairan 1% bisa menurunkan konsentrasi.', 'en' => '1% fluid loss can lower concentration.']),
            'image' => 'https://img.freepik.com/free-vector/drinking-water-concept-illustration_114360-8456.jpg?w=740'
        ]);
        Option::create(['question_id' => $q3->id, 'score' => 20, 'option_text' => json_encode(['id' => '< 4 gelas', 'en' => '< 4 glasses'])]);
        Option::create(['question_id' => $q3->id, 'score' => 60, 'option_text' => json_encode(['id' => '4 - 6 gelas', 'en' => '4 - 6 glasses'])]);
        Option::create(['question_id' => $q3->id, 'score' => 100, 'option_text' => json_encode(['id' => '> 8 gelas', 'en' => '> 8 glasses'])]);

        Recommendation::create([
            'category_id' => $hydration->id, 'min_score' => 0, 'max_score' => 60, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Tingkatkan Asupan Air', 'en' => 'Increase Water Intake']),
            'description' => json_encode(['id' => 'Anda berisiko dehidrasi ringan. Sediakan botol minum di meja kerja.', 'en' => 'Risk of mild dehydration. Keep a water bottle at your desk.'])
        ]);
        Recommendation::create([
            'category_id' => $hydration->id, 'min_score' => 61, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Hidrasi Terjaga', 'en' => 'Well Hydrated']),
            'description' => json_encode(['id' => 'Tubuh Anda terhidrasi dengan baik.', 'en' => 'Your body is well hydrated.'])
        ]);

      
        // 4. PHYSICAL ACTIVITY
      
        $activity = Category::create([
            'slug' => 'activity',
            'name' => json_encode(['id' => 'Aktivitas Fisik', 'en' => 'Physical Activity'])
        ]);

        $q4 = Question::create([
            'category_id' => $activity->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Berapa kali Anda berolahraga dalam seminggu?', 'en' => 'How often do you exercise per week?']),
            'description' => json_encode(['id' => 'Olahraga menjaga kesehatan jantung dan berat badan.', 'en' => 'Exercise maintains heart health and weight.']),
            'fact' => json_encode(['id' => 'Olahraga 30 menit sehari mengurangi risiko penyakit jantung.', 'en' => '30 mins exercise daily reduces heart disease risk.']),
            'image' => 'https://img.freepik.com/free-vector/working-out-concept-illustration_114360-9477.jpg?w=740'
        ]);
        Option::create(['question_id' => $q4->id, 'score' => 10, 'option_text' => json_encode(['id' => 'Tidak pernah', 'en' => 'Never'])]);
        Option::create(['question_id' => $q4->id, 'score' => 40, 'option_text' => json_encode(['id' => '1 - 2 kali', 'en' => '1 - 2 times'])]);
        Option::create(['question_id' => $q4->id, 'score' => 80, 'option_text' => json_encode(['id' => '3 - 5 kali', 'en' => '3 - 5 times'])]);
        Option::create(['question_id' => $q4->id, 'score' => 100, 'option_text' => json_encode(['id' => 'Setiap hari', 'en' => 'Every day'])]);

        Recommendation::create([
            'category_id' => $activity->id, 'min_score' => 0, 'max_score' => 50, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Kurang Gerak (Sedentary)', 'en' => 'Sedentary Lifestyle']),
            'description' => json_encode(['id' => 'Cobalah berjalan kaki 30 menit setiap hari.', 'en' => 'Try walking for 30 minutes every day.'])
        ]);
        Recommendation::create([
            'category_id' => $activity->id, 'min_score' => 51, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Aktif Secara Fisik', 'en' => 'Physically Active']),
            'description' => json_encode(['id' => 'Rutinitas olahraga Anda sangat baik. Pertahankan!', 'en' => 'Your exercise routine is excellent. Keep it up!'])
        ]);

      
        // 5. MENTAL HEALTH
       
        $mental = Category::create([
            'slug' => 'mental',
            'name' => json_encode(['id' => 'Kesehatan Mental', 'en' => 'Mental Health'])
        ]);

        $q5 = Question::create([
            'category_id' => $mental->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Seberapa sering Anda merasa cemas berlebihan?', 'en' => 'How often do you feel overly anxious?']),
            'description' => json_encode(['id' => 'Kesehatan mental sama pentingnya dengan fisik.', 'en' => 'Mental health is as important as physical health.']),
            'fact' => json_encode(['id' => 'Meditasi 10 menit bisa menurunkan hormon stres.', 'en' => '10 mins meditation can lower stress hormones.']),
            'image' => 'https://img.freepik.com/free-vector/feeling-blue-concept-illustration_114360-4024.jpg?w=740'
        ]);
        Option::create(['question_id' => $q5->id, 'score' => 20, 'option_text' => json_encode(['id' => 'Setiap hari', 'en' => 'Every day'])]);
        Option::create(['question_id' => $q5->id, 'score' => 50, 'option_text' => json_encode(['id' => 'Sering', 'en' => 'Often'])]);
        Option::create(['question_id' => $q5->id, 'score' => 80, 'option_text' => json_encode(['id' => 'Kadang-kadang', 'en' => 'Sometimes'])]);
        Option::create(['question_id' => $q5->id, 'score' => 100, 'option_text' => json_encode(['id' => 'Jarang / Tidak pernah', 'en' => 'Rarely / Never'])]);

        Recommendation::create([
            'category_id' => $mental->id, 'min_score' => 0, 'max_score' => 60, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Kelola Stres Anda', 'en' => 'Manage Your Stress']),
            'description' => json_encode(['id' => 'Luangkan waktu "Me Time" atau praktikkan mindfulness.', 'en' => 'Take some "Me Time" or practice mindfulness.'])
        ]);
        Recommendation::create([
            'category_id' => $mental->id, 'min_score' => 61, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Kondisi Mental Stabil', 'en' => 'Stable Mental State']),
            'description' => json_encode(['id' => 'Manajemen emosi Anda cukup baik.', 'en' => 'Your emotional management is quite good.'])
        ]);

        
        // 6. SCREEN TIME
        
        $screen = Category::create([
            'slug' => 'screen',
            'name' => json_encode(['id' => 'Waktu Layar', 'en' => 'Screen Time'])
        ]);
        $q6 = Question::create([
            'category_id' => $screen->id,
            'input_type' => 'scale',
            'question_text' => json_encode(['id' => 'Berapa lama Anda menatap layar HP di luar jam kerja?', 'en' => 'Screen time outside work hours?']),
            'description' => json_encode(['id' => 'Paparan layar berlebih mengganggu mata dan tidur.', 'en' => 'Excessive screen time disrupts eyes and sleep.']),
            'fact' => json_encode(['id' => 'Cahaya biru gadget menghambat melatonin.', 'en' => 'Blue light from gadgets blocks melatonin.']),
            'image' => 'https://img.freepik.com/free-vector/social-media-addiction-concept-illustration_114360-4886.jpg?w=740'
        ]);
        Option::create(['question_id' => $q6->id, 'score' => 20, 'option_text' => json_encode(['id' => '> 5 jam', 'en' => '> 5 hours'])]);
        Option::create(['question_id' => $q6->id, 'score' => 60, 'option_text' => json_encode(['id' => '3 - 4 jam', 'en' => '3 - 4 hours'])]);
        Option::create(['question_id' => $q6->id, 'score' => 100, 'option_text' => json_encode(['id' => '< 2 jam', 'en' => '< 2 hours'])]);

        Recommendation::create([
            'category_id' => $screen->id, 'min_score' => 0, 'max_score' => 60, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Kurangi Gadget', 'en' => 'Reduce Screen Time']),
            'description' => json_encode(['id' => 'Batasi penggunaan HP 1 jam sebelum tidur.', 'en' => 'Limit phone use 1 hour before bed.'])
        ]);

      
        // 7. BMI / BODY COMPOSITION
    
        $body = Category::create([
            'slug' => 'bmi',
            'name' => json_encode(['id' => 'Komposisi Tubuh', 'en' => 'Body Composition'])
        ]);

        // Input Angka (Tanpa Option)
        Question::create([
            'category_id' => $body->id, 'input_type' => 'number', 'variable_name' => 'weight',
            'question_text' => json_encode(['id' => 'Berat Badan (kg)', 'en' => 'Weight (kg)']),
            'description' => json_encode(['id' => 'Berat badan mempengaruhi risiko penyakit kronis.', 'en' => 'Weight affects chronic disease risk.']),
            'image' => 'https://img.freepik.com/free-vector/weight-loss-concept-illustration_114360-8012.jpg?w=740'
        ]);
        Question::create([
            'category_id' => $body->id, 'input_type' => 'number', 'variable_name' => 'height',
            'question_text' => json_encode(['id' => 'Tinggi Badan (cm)', 'en' => 'Height (cm)']),
            'description' => json_encode(['id' => 'Digunakan untuk menghitung IMT (Indeks Massa Tubuh).', 'en' => 'Used to calculate BMI.']),
            'image' => 'https://img.freepik.com/free-vector/height-measure-concept-illustration_114360-2975.jpg?w=740'
        ]);

        // Rekomendasi BMI
        Recommendation::create([
            'category_id' => $body->id, 'min_score' => 0, 'max_score' => 60, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Berat Badan Tidak Ideal', 'en' => 'Non-Ideal Weight']),
            'description' => json_encode(['id' => 'Hasil BMI menunjukkan Underweight atau Obese. Konsultasikan ke dokter.', 'en' => 'BMI results show Underweight or Obese. Consult a doctor.'])
        ]);
        Recommendation::create([
            'category_id' => $body->id, 'min_score' => 61, 'max_score' => 80, 'type' => 'bad_habit',
            'title' => json_encode(['id' => 'Berat Badan Berlebih (Overweight)', 'en' => 'Overweight']),
            'description' => json_encode(['id' => 'Perhatikan asupan kalori dan aktivitas fisik Anda.', 'en' => 'Watch your calorie intake and physical activity.'])
        ]);
        Recommendation::create([
            'category_id' => $body->id, 'min_score' => 81, 'max_score' => 100, 'type' => 'good_habit',
            'title' => json_encode(['id' => 'Berat Badan Ideal', 'en' => 'Ideal Weight']),
            'description' => json_encode(['id' => 'Pertahankan berat badan sehat ini!', 'en' => 'Maintain this healthy weight!'])
        ]);
    }
}