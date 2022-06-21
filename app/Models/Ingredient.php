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
    
    public $translatedAttributes = ['title'];
}

class IngredientTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
}