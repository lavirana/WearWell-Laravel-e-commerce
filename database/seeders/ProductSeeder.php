<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                Product::create([
                    'name' => $category->name . " Product " . $i,
                    'description' => "This is a sample description for " . $category->name . " product " . $i,
                    'price' => rand(100, 1000),
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
