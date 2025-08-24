## 🛒 Laravel E-Commerce Starter

This project is a starter template for an e-commerce application built with Laravel Breeze authentication and role-based access.

It includes:

User roles: Customer, Admin, Vendor

Categories, Products, Inventories

Orders with pivot table (order_items)

Reviews system

Dummy data seeding

## 🚀 Installation

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

## 📂 Project Structure
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

## 🗄️ Database Schema

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

## 🛡️ Authentication

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

## Some Glimpse

<img width="1440" height="783" alt="Screenshot 2025-08-22 at 2 37 22 PM" src="https://github.com/user-attachments/assets/82367068-460d-46ff-9d32-d85aab46eac9" />

<img width="1440" height="779" alt="Screenshot 2025-08-22 at 2 43 17 PM" src="https://github.com/user-attachments/assets/844e9b98-6afb-494f-a13c-0d281009aa04" />

<img width="1440" height="776" alt="Screenshot 2025-08-22 at 2 43 00 PM" src="https://github.com/user-attachments/assets/c295e2e0-eb52-481a-bb38-7eb5f35c7486" />

<img width="1436" height="779" alt="Screenshot 2025-08-23 at 1 23 47 PM" src="https://github.com/user-attachments/assets/c7c8509e-1f77-49b9-8a95-bc1b3cce088f" />

<img width="1431" height="778" alt="Screenshot 2025-08-23 at 1 24 04 PM" src="https://github.com/user-attachments/assets/215f70b9-cd34-4884-99ea-4e4c4d5cb92a" />

<img width="1435" height="780" alt="Screenshot 2025-08-23 at 1 46 17 PM" src="https://github.com/user-attachments/assets/dc876173-4c66-4824-bc7c-19da4ee86fa1" />

<img width="1433" height="778" alt="Screenshot 2025-08-23 at 1 46 24 PM" src="https://github.com/user-attachments/assets/d9949160-50e1-4221-8cc6-a563f2f5412b" />

<img width="1435" height="778" alt="Screenshot 2025-08-24 at 6 48 26 PM" src="https://github.com/user-attachments/assets/0920fea0-fb02-406a-98dd-df55d8e63b01" />

<img width="1432" height="778" alt="Screenshot 2025-08-24 at 6 48 33 PM" src="https://github.com/user-attachments/assets/e7e02507-7011-4b67-bf2c-165116159384" />

<img width="1434" height="777" alt="Screenshot 2025-08-24 at 6 48 39 PM" src="https://github.com/user-attachments/assets/1e051493-5b9f-4400-97cd-97c61dc79ad0" />

<img width="1434" height="779" alt="Screenshot 2025-08-24 at 6 48 46 PM" src="https://github.com/user-attachments/assets/9947f647-d510-4168-ab93-7473458776cd" />

<img width="1432" height="776" alt="Screenshot 2025-08-24 at 6 49 01 PM" src="https://github.com/user-attachments/assets/c9d54312-0662-4f44-9b9b-5361691679ae" />


