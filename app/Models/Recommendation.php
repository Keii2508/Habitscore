<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Traits\HasTranslations;



class Recommendation extends Model {
    use HasTranslations;
    protected $guarded = [];

    public function getTitleTextAttribute() { return $this->getTrans('title'); }
    public function getDescriptionTextAttribute() { return $this->getTrans('description'); }
}