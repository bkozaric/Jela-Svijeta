<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MealTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $tags = Tag::all();
        $tag = $tags->random(rand(1, 5))->first();

        $meals = Meal::all();
        $meal = $meals->random(rand(1, 5))->first();

        return [
            'tag_id' => $tag->id,
            'meal_id' => $meal->id,
        ];
    }
}
