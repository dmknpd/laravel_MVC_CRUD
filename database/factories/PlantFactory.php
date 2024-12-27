<?php

namespace Database\Factories;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ucwords(fake()->word()),
            'seller_id' => Seller::factory(),
            'description' => fake()->text(200),
            'price' => fake()->randomFloat(2, 5, 100),
            'img' => fake()->imageUrl(640, 480, 'plants', true, 'Faker')
        ];
    }
}
