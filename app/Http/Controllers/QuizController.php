<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Option;
use App\Models\Recommendation;

class QuizController extends Controller
{
    public function index()
    {
     
        $questionsData = Question::with(['category', 'options'])->get();

        $jsQuestions = $questionsData->map(function ($q) {
            return [
                'id' => $q->id, 
                'category' => $q->category->name_text,
                'text' => $q->question_text, 
                'desc' => $q->description_text ?? '',
                'fact' => $q->fact_text ?? '',
                'image' => $q->image ?? 'https://via.placeholder.com/740x500', 
                'input_type' => $q->input_type,
                'variable_name' => $q->variable_name,
                'options' => $q->options->map(function($opt) {
                    return [
                        'id' => $opt->id,
                        'text' => $opt->option_text
                    ];
                })
            ];
        });

        return view('quiz', compact('jsQuestions'));
    }

    public function submit(Request $request)
    {
        // LOGIC
        $answers = $request->input('answers', []);
        $bmiInput = $request->input('bmi', []);
        
        $results = [];
        $categories = Category::with('questions')->get();

        // 1. Hitung Scale/Pilihan Ganda
        foreach ($categories as $category) {
            if ($category->slug == 'bmi') continue;

            $totalScore = 0;
            $count = 0;
            foreach ($category->questions as $q) {
                if (isset($answers[$q->id])) {
                    $opt = Option::find($answers[$q->id]);
                    if ($opt) {
                        $totalScore += $opt->score;
                        $count++;
                    }
                }
            }
            // Logic Rata-rata
            $finalScore = $count > 0 ? round($totalScore / $count) : 0;
            
            // Simpan Result
            $this->processResult($results, $category, $finalScore);
        }

        // 2. Hitung BMI (Jika ada input)
        $bmiCat = Category::where('slug', 'bmi')->first();
        if ($bmiCat && isset($bmiInput['weight']) && isset($bmiInput['height'])) {
            $w = floatval($bmiInput['weight']);
            $h = floatval($bmiInput['height']) / 100;
            if ($h > 0) {
                $bmi = $w / ($h * $h);
                // Mapping skor BMI sederhan
                $score = ($bmi >= 18.5 && $bmi <= 24.9) ? 100 : 50; 
                $this->processResult($results, $bmiCat, $score, number_format($bmi, 1));
            }
        }

        return view('result', compact('results'));
    }

    private function processResult(&$results, $cat, $score, $extra = null) {
        $rec = Recommendation::where('category_id', $cat->id)
                ->where('min_score', '<=', $score)
                ->where('max_score', '>=', $score)
                ->first();
        
        if($rec) {
            $results[] = [
                'category' => $cat->name_text,
                'score' => $score,
                'type' => $rec->type,
                'title' => $rec->title_text,
                'description' => $rec->description_text,
                'extra_info' => $extra
            ];
        }
    }
}