🛒 Laravel E-Commerce Starter

This project is a starter template for an e-commerce application built with Laravel Breeze authentication and role-based access.

It includes:

User roles: Customer, Admin, Vendor

Categories, Products, Inventories

Orders with pivot table (order_items)

Reviews system

Dummy data seeding

🚀 Installation

Clone the repo

git clone https://github.com/your-username/your-project.git
cd your-project


Install dependencies

composer install
npm install && npm run dev


Setup .env
Copy .env.example → .env and update database credentials.

php artisan key:generate


Run migrations + seeders

php artisan migrate:fresh --seed


This will create tables and insert dummy categories, products, and inventories.

📂 Project Structure
app/
 ├── Models/
 │   ├── User.php (hasMany Orders)
 │   ├── Category.php (hasMany Products)
 │   ├── Product.php (belongsTo Category, hasMany Reviews, hasOne Inventory)
 │   ├── Order.php (belongsTo User, belongsToMany Products)
 │   ├── Review.php (belongsTo Product)
 │   ├── Inventory.php (belongsTo Product)
 │
 ├── Http/
 │   ├── Controllers/
 │       ├── Auth/ (Breeze Auth Controllers)
 │       ├── ProductController.php
 │       ├── OrderController.php
 │       └── CategoryController.php

🗄️ Database Schema

Users → roles: customer, admin, vendor

Categories → each has many products

Products → belongs to category, has inventory & reviews

Inventories → tracks stock for products

Orders → belongs to user, many-to-many products (order_items pivot)

Reviews → belongs to products

🧪 Seeding Dummy Data

We’ve included seeders for:

Categories (Electronics, Clothing, Books, etc.)

Products (auto-generated under each category)

Inventories (random stock quantity for each product)

Run:

php artisan db:seed

🛡️ Authentication

This project uses Laravel Breeze with Tailwind CSS.

Register/Login/Logout included

Role column in users table allows multiple access levels

🛠️ Commands
Command	Description
php artisan serve	Start local server
php artisan migrate	Run database migrations
php artisan db:seed	Seed dummy data
php artisan migrate:fresh --seed	Reset DB and re-seed
📌 Next Steps

Add Cart system (session/db based)

Add Admin Dashboard for managing categories/products/orders

Add Vendor Role to manage own products