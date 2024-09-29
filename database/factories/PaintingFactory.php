<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Painting>
 */
class PaintingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'genreID'=>Genre::factory(),
            'artistID'=>fake()->numberBetween(1000,100000),
            'artistName'=>$this->faker->name(),
            'paintingTitle'=>fake()->word,
            'paintingDescription'=>fake()->paragraph,
            'paintingImage'=>fake()->imageUrl(),
            'shippingCharge'=>fake()->numberBetween(10,100),
            'paintingYear'=>fake()->year(),

        ];
    }
}
