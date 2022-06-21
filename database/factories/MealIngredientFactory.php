<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MealIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        

        $ingredients = Ingredient::all();
        $ingredient = $ingredients->random(rand(1, 5))->first();

        $meals = Meal::all();
        $meal = $meals->random(rand(1, 5))->first();

        return [
            
            'meal_id' => $meal->id,
            'ingredient_id' => $ingredient->id,
        ];
    }
}
