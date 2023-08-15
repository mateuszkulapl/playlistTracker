<?php

namespace Database\Factories;

use App\Models\Category;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

class PlaylistFactory extends Factory
{

    private static $order = 0;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $thumbnails = [
            'default' => [
                'url' => $this->faker->imageUrl(120, 90),
                'url' => $this->faker->imageUrl(120, 90),
                'width' => 120,
                'height' => 90
            ],
            'medium' => [
                'url' => $this->faker->imageUrl(320, 180),
                'width' => 320,
                'height' => 180
            ],
            'high' => [
                'url' => $this->faker->imageUrl(480, 360),
                'width' => 480,
                'height' => 360
            ],
            'standard' => [
                'url' => $this->faker->imageUrl(640, 480),
                'width' => 640,
                'height' => 480
            ],
            'maxres' => [
                'url' => $this->faker->imageUrl(1280, 720),
                'width' => 1280,
                'height' => 720
            ]
        ];
        $publishedAt = $this->faker->dateTimeBetween('-5 years', 'now');
        $duration = CarbonInterval::make($this->faker->numberBetween(0, 3600) . ' seconds')->cascade();
        return [
            'id' => $this->faker->uuid(),
            'title' => $this->faker->words(rand(3, 8), true),
            'description' => $this->faker->paragraphs(rand(1, 3), true),
            'thumbnails' => json_encode($thumbnails),
            'itemCount' => 0,
            'publishedAt' => $publishedAt,
            'watchedAt' => $this->faker->optional(0.3, null)->dateTimeBetween($publishedAt, 'now'),
            'inprogress' => $this->faker->boolean(25),
            'order' => ++self::$order,
            'category_id' => Category::factory(),
            'rating' => $this->faker->optional(0.25, null)->numberBetween(1, 5),
            'difficulty' => $this->faker->optional(0.25, null)->numberBetween(0, 5),
            'duration' => $duration,
            'channelTitle' => $this->faker->name(),
            'channelId' => $this->faker->uuid(),
        ];
    }

    /**
     * Indicate that the element is watched.
     */
    public function watched(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'watchedAt' => $this->faker->dateTimeBetween($attributes['publishedAt'], 'now'),
            ];
        });
    }

    /**
     * Indicate that the element is not watched.
     */
    public function unwatched(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'watchedAt' => null,
            ];
        });
    }



    public static function resetOrder()
    {
        self::$order = 0;
    }
}
