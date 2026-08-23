<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // Users
        // =========================

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);


        // =========================
        // Categories
        // =========================

        $categories = [
            Category::create(['name' => 'T-Shirts']),
            Category::create(['name' => 'Hoodies']),
            Category::create(['name' => 'Jeans']),
            Category::create(['name' => 'Jackets']),
            Category::create(['name' => 'Shoes']),
        ];


        // =========================
        // Colors
        // =========================

        $colors = [
            Color::create([
                'name' => 'Black',
                'hex_code' => '#000000',
            ]),

            Color::create([
                'name' => 'White',
                'hex_code' => '#FFFFFF',
            ]),

            Color::create([
                'name' => 'Red',
                'hex_code' => '#EF4444',
            ]),

            Color::create([
                'name' => 'Blue',
                'hex_code' => '#3B82F6',
            ]),

            Color::create([
                'name' => 'Green',
                'hex_code' => '#22C55E',
            ]),
        ];


        // =========================
        // Sizes
        // =========================

        $sizes = [
            Size::create(['name' => 'XS']),
            Size::create(['name' => 'S']),
            Size::create(['name' => 'M']),
            Size::create(['name' => 'L']),
            Size::create(['name' => 'XL']),
        ];


        // =========================
        // Products
        // =========================

        $products = [
            Product::create([
                'name' => 'Classic T-Shirt',
                'description' => 'A simple everyday cotton t-shirt.',
                'category_id' => $categories[0]->id,
            ]),

            Product::create([
                'name' => 'Oversized Hoodie',
                'description' => 'A comfortable oversized hoodie.',
                'category_id' => $categories[1]->id,
            ]),

            Product::create([
                'name' => 'Straight Fit Jeans',
                'description' => 'Classic straight fit denim jeans.',
                'category_id' => $categories[2]->id,
            ]),

            Product::create([
                'name' => 'Classic Bomber Jacket',
                'description' => 'A modern casual bomber jacket.',
                'category_id' => $categories[3]->id,
            ]),

            Product::create([
                'name' => 'Everyday Sneakers',
                'description' => 'Comfortable sneakers for everyday use.',
                'category_id' => $categories[4]->id,
            ]),
        ];


        // =========================
        // Variants
        // =========================

        Variant::create([
            'product_id' => $products[0]->id,
            'color_id' => $colors[0]->id,
            'size_id' => $sizes[1]->id,
            'price' => 19.99,
        ]);

        Variant::create([
            'product_id' => $products[0]->id,
            'color_id' => $colors[1]->id,
            'size_id' => $sizes[2]->id,
            'price' => 19.99,
        ]);

        Variant::create([
            'product_id' => $products[0]->id,
            'color_id' => $colors[3]->id,
            'size_id' => $sizes[3]->id,
            'price' => 21.99,
        ]);

        Variant::create([
            'product_id' => $products[1]->id,
            'color_id' => $colors[0]->id,
            'size_id' => $sizes[2]->id,
            'price' => 49.99,
        ]);

        Variant::create([
            'product_id' => $products[1]->id,
            'color_id' => $colors[2]->id,
            'size_id' => $sizes[3]->id,
            'price' => 54.99,
        ]);

        Variant::create([
            'product_id' => $products[2]->id,
            'color_id' => $colors[0]->id,
            'size_id' => $sizes[2]->id,
            'price' => 59.99,
        ]);

        Variant::create([
            'product_id' => $products[2]->id,
            'color_id' => $colors[3]->id,
            'size_id' => $sizes[3]->id,
            'price' => 64.99,
        ]);

        Variant::create([
            'product_id' => $products[3]->id,
            'color_id' => $colors[0]->id,
            'size_id' => $sizes[3]->id,
            'price' => 79.99,
        ]);

        Variant::create([
            'product_id' => $products[4]->id,
            'color_id' => $colors[1]->id,
            'size_id' => $sizes[2]->id,
            'price' => 69.99,
        ]);

        Variant::create([
            'product_id' => $products[4]->id,
            'color_id' => $colors[0]->id,
            'size_id' => $sizes[3]->id,
            'price' => 69.99,
        ]);
    }
}