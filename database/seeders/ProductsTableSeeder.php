<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Category 1 = Ethnic Wear
            1 => [
                ['name' => 'Cotton Kurta', 'description' => 'Traditional cotton kurta for men.', 'price' => 1299],
                ['name' => 'Silk Saree', 'description' => 'Elegant silk saree with zari work.', 'price' => 4999],
                ['name' => 'Embroidered Sherwani', 'description' => 'Premium sherwani for weddings.', 'price' => 7999],
            ],

            // Category 2 = Sports Wear
            2 => [
                ['name' => 'Running Shoes', 'description' => 'Lightweight running shoes.', 'price' => 2499],
                ['name' => 'Track Pants', 'description' => 'Comfortable polyester track pants.', 'price' => 1199],
                ['name' => 'Sports T-shirt', 'description' => 'Breathable dri-fit sports t-shirt.', 'price' => 899],
            ],

            // Category 3 = Formal Wear
            3 => [
                ['name' => 'Formal Shirt', 'description' => 'Classic white formal shirt.', 'price' => 999],
                ['name' => 'Blazer', 'description' => 'Slim fit formal blazer.', 'price' => 3499],
                ['name' => 'Formal Trousers', 'description' => 'Tailored fit formal trousers.', 'price' => 1599],
            ],

            // Category 4 = Accessories
            4 => [
                ['name' => 'Leather Wallet', 'description' => 'Premium leather wallet.', 'price' => 799],
                ['name' => 'Wrist Watch', 'description' => 'Stainless steel wrist watch.', 'price' => 2599],
                ['name' => 'Sunglasses', 'description' => 'UV-protected stylish sunglasses.', 'price' => 1299],
            ],
        ];

        foreach ($products as $categoryId => $items) {
            foreach ($items as $item) {
                DB::table('products')->insert([
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'category_id' => $categoryId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
