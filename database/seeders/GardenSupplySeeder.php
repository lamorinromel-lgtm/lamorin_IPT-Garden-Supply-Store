<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;

class GardenSupplySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->count(5)->create();
        Supplier::factory()->count(5)->create();
        Customer::factory()->count(10)->create();

        Product::factory()->count(20)->create();

        Order::factory()->count(10)->create();
    }
}