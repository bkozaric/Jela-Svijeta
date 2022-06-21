<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagFactory extends Factory
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
            ],
            'fr' =>  [
                'title' => $this->faker->word(),
            ],
            'de' =>  [
                'title' => $this->faker->word(),
            ],
            'slug' => $this->faker->uuid(),
        ];
    }
}
