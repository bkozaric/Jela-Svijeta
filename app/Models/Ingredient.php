<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ingredient extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['slug'];
    protected $hidden = ['created_at','updated_at','deleted_at','translations'];
    
    public $translatedAttributes = ['title'];

    public function meals()
    {
    	return $this->belongsToMany('App\Meal');
    }
}

class IngredientTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
}