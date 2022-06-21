<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Language;
use App\Models\Ingredient;
use App\Models\MealIngredient;
use App\Models\MealTag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name' => 'en']);
        Language::create(['name' => 'fr']);
        Language::create(['name' => 'de']);

       
        Tag::factory(5)->create();
        Ingredient::factory(5)->create();
        Category::factory(5)->create();
        Meal::factory(5)->create();
        MealIngredient::factory(20)->create();
        MealTag::factory(10)->create();
    }
}
