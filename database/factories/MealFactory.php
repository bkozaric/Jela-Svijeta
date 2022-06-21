<?php

namespace Database\Factories;

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
            ]
        ];
    }
}
