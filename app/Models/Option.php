<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Traits\HasTranslations;


class Option extends Model {
    use HasTranslations;
    protected $guarded = [];

    public function getOptionTextAttribute() { return $this->getTrans('option_text'); }
}