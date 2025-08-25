<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'How to Look Outstanding in Pastel',
                'slug' => 'how-to-look-outstanding-in-pastel',
                'category' => 'Fashion',
                'image' => 'uploads/blogs/pastel.jpg',
                'publish_date' => '2022-07-11',
                'short_description' => 'Tips for looking stylish in pastel shades...',
                'content' => 'Detailed blog content for pastel fashion.'
            ],
            [
                'title' => '10 PHP Interview Questions You Must Know',
                'slug' => '10-php-interview-questions',
                'category' => 'Programming',
                'image' => 'uploads/blogs/php-interview.jpg',
                'publish_date' => '2023-01-20',
                'short_description' => 'Commonly asked PHP interview questions.',
                'content' => 'Here are some useful PHP interview questions with answers.'
            ],
            [
                'title' => 'Laravel Tips for Beginners',
                'slug' => 'laravel-tips-for-beginners',
                'category' => 'Programming',
                'image' => 'uploads/blogs/laravel-tips.jpg',
                'publish_date' => '2023-03-12',
                'short_description' => 'Best practices for learning Laravel.',
                'content' => 'Laravel is a powerful PHP framework...'
            ],
            [
                'title' => 'Top 5 Travel Destinations in 2024',
                'slug' => 'top-5-travel-destinations-2024',
                'category' => 'Travel',
                'image' => 'uploads/blogs/travel2024.jpg',
                'publish_date' => '2024-05-01',
                'short_description' => 'Here are the most popular travel destinations.',
                'content' => 'Travel guide for 2024 destinations...'
            ],
            [
                'title' => 'Healthy Eating Habits',
                'slug' => 'healthy-eating-habits',
                'category' => 'Health',
                'image' => 'uploads/blogs/healthy-food.jpg',
                'publish_date' => '2024-06-15',
                'short_description' => 'Simple tips to maintain a healthy lifestyle.',
                'content' => 'Healthy eating improves your overall lifestyle...'
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
