<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Review;

use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    use HasFactory;

    public $translatable = ['description'];

    protected $guarded=[];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'product_id');
    }
    
}
