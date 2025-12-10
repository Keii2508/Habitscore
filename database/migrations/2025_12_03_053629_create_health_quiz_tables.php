<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // 1. Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->json('name');
            $table->timestamps();
        });

        // 2. Questions 
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->json('question_text');
            $table->json('description')->nullable(); // Kolom baru utk UI
            $table->json('fact')->nullable();        // Kolom baru utk UI (Tahukah Anda?)
            $table->string('image')->nullable();     // URL Gambar
            $table->enum('input_type', ['scale', 'number']); 
            $table->string('variable_name')->nullable();
            $table->timestamps();
        });

        // 3. Options
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained()->onDelete('cascade');
            $table->json('option_text');
            $table->integer('score');
            $table->timestamps();
        });

        // 4. Recommendations
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->integer('min_score');
            $table->integer('max_score');
            $table->enum('type', ['bad_habit', 'good_habit']);
            $table->json('title');
            $table->json('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommendations');
        Schema::dropIfExists('options');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('categories');
    }
};