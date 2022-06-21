<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Meal extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;
    
    public $translatedAttributes = ['title', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    
}


class MealTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}

