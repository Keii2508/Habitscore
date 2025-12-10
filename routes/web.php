<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\QuizController; 

// Route Ganti Bahasa
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');


    
Route::get('/cara-kerja', function () { return view('cara-kerja'); }); 
Route::get('/articles', function () { return view('articles'); });   