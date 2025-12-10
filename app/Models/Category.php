<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Traits\HasTranslations;


class Category extends Model {
    use HasTranslations;
    protected $guarded = [];
    
    // Accessor: $category->name_text
    public function getNameTextAttribute() {
         return $this->getTrans('name');
        
        }

    public function questions() {
         return $this->hasMany(Question::class);
         }

    public function recommendations() { 
        return $this->hasMany(Recommendation::class); 
    }
}