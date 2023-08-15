<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Award>
 */
class AwardFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => rand(0, 3) ? $this->faker->word() : $this->faker->imageUrl(120, 90),
            'percentage' => $this->faker->randomFloat(2, 0, 100),
            'category_id' => Category::factory(),
        ];
    }
}
