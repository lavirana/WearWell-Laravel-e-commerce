<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            Inventory::create([
                'product_id' => $product->id,
                'quantity' => rand(10, 100), // stock qty
            ]);
        }
    }
}
