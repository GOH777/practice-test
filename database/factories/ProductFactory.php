<?php

namespace Database\Factories;

use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
             'status' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100,500),
            'buyer_id'=>Buyer::factory(),
            'seller' => $this->faker->name(),
        ];
    }
}
