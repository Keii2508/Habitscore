<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Traits\HasTranslations;


class Question extends Model {
    use HasTranslations;
    protected $guarded = [];

    public function getQuestionTextAttribute() { return $this->getTrans('question_text'); }

    public function options() { return $this->hasMany(Option::class); }
    public function category() { return $this->belongsTo(Category::class); }
}