<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $categories = Category::all();
	    $category = $categories->random(rand(0, 5))->first();

        $tags = Tag::all();
        $tag = $categories->random(rand(0, 5))->first();

        $ingredients = Ingredient::all();
        $ingredient = $categories->random(rand(0, 5))->first();

        return [
            
            'en' =>  [
                'title' => $this->faker->word(),
                'description' => $this->faker->sentence(10),
            ],
            'fr' =>  [
                'title' => $this->faker->word(),
                'description' => $this->faker->sentence(10),
            ],
            'de' =>  [
                'title' => $this->faker->word(),
                'description' => $this->faker->sentence(10),
            ],
            'ingredient_id' => $ingredient->id,
            'tag_id' => $tag->id,
            'category_id' => $category->id,
        ];
    }
}
