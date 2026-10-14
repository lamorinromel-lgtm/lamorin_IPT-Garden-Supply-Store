<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        $product = Product::factory()->create();
        $quantity = fake()->numberBetween(1, 3);
        $subtotal = (float) $product->price * $quantity;

        return [
            'customer_id' => Customer::factory(),
            'order_date' => fake()->date(),
            'items' => [
                [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'quantity' => $quantity,
                    'unit_price' => (float) $product->price,
                    'subtotal' => $subtotal,
                ],
            ],
            'total_amount' => $subtotal,
            'status' => fake()->randomElement([
                'Pending',
                'Processing',
                'Completed',
                'Cancelled',
            ]),
        ];
    }
}