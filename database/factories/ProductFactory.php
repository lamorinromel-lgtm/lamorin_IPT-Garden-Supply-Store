<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Garden Shovel',
                'Watering Can',
                'Flower Pot',
                'Garden Hose',
                'Pruning Shears',
                'Organic Fertilizer',
                'Plant Seeds',
                'Garden Gloves',
            ]) . ' ' . fake()->unique()->numberBetween(1000, 999999),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 20, 2500),
            'stock_quantity' => fake()->numberBetween(5, 100),
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),
        ];
    }
}