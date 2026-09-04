<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            /*
            |--------------------------------------------------------------------------
            | PRODUCT IMAGES
            |--------------------------------------------------------------------------
            |
            | Get all images from public/images.
            |
            */

            $imageFiles = glob(public_path('images/*'));

            $imageFiles = array_filter($imageFiles, function ($file) {
                return is_file($file);
            });

            if (empty($imageFiles)) {
                throw new \Exception(
                    'No images found in public/images.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | CATEGORIES
            |--------------------------------------------------------------------------
            */

            $categories = [
                'T-Shirts',
                'Shirts',
                'Jeans',
                'Hoodies',
                'Jackets',
                'Shorts',
                'Shoes',
            ];

            $categoryIds = [];

            foreach ($categories as $name) {
                $categoryIds[$name] = DB::table('categories')->insertGetId([
                    'name' => $name,
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | COLORS
            |--------------------------------------------------------------------------
            */

            $colors = [
                'Black' => '#000000',
                'White' => '#FFFFFF',
                'Red' => '#EF4444',
                'Blue' => '#3B82F6',
                'Green' => '#22C55E',
                'Yellow' => '#EAB308',
                'Gray' => '#6B7280',
            ];

            $colorIds = [];

            foreach ($colors as $name => $hexCode) {
                $colorIds[$name] = DB::table('colors')->insertGetId([
                    'name' => $name,
                    'hex_code' => $hexCode,
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | SIZES
            |--------------------------------------------------------------------------
            */

            $sizes = [
                'XS',
                'S',
                'M',
                'L',
                'XL',
                'XXL',
            ];

            $sizeIds = [];

            foreach ($sizes as $name) {
                $sizeIds[$name] = DB::table('sizes')->insertGetId([
                    'name' => $name,
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | USERS
            |--------------------------------------------------------------------------
            */

            $users = [];

            $userNames = [
                'John Doe',
                'Jane Smith',
                'Michael Johnson',
                'Sarah Williams',
                'Alex Brown',
                'David Wilson',
                'Emma Davis',
                'Daniel Miller',
            ];

            foreach ($userNames as $name) {
                $users[] = DB::table('users')->insertGetId([
                    'name' => $name,
                    'email' => strtolower(str_replace(' ', '.', $name)) . '@example.com',
                    'password' => Hash::make('password'),
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | PRODUCTS
            |--------------------------------------------------------------------------
            */

            $products = [
                [
                    'name' => 'Classic Cotton T-Shirt',
                    'description' => 'A comfortable everyday cotton t-shirt with a clean and minimal design.',
                    'category' => 'T-Shirts',
                    'price' => 19.99,
                    'colors' => ['Black', 'White', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Oversized Streetwear T-Shirt',
                    'description' => 'An oversized t-shirt designed for a relaxed modern streetwear look.',
                    'category' => 'T-Shirts',
                    'price' => 29.99,
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                ],

                [
                    'name' => 'Premium Oxford Shirt',
                    'description' => 'A premium Oxford shirt suitable for both casual and formal outfits.',
                    'category' => 'Shirts',
                    'price' => 49.99,
                    'colors' => ['White', 'Blue', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Slim Fit Jeans',
                    'description' => 'Modern slim fit jeans made from durable stretch denim.',
                    'category' => 'Jeans',
                    'price' => 59.99,
                    'colors' => ['Blue', 'Black'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Essential Pullover Hoodie',
                    'description' => 'A warm and comfortable hoodie with a simple minimal design.',
                    'category' => 'Hoodies',
                    'price' => 54.99,
                    'colors' => ['Black', 'Gray', 'Green'],
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                ],

                [
                    'name' => 'Classic Denim Jacket',
                    'description' => 'A timeless denim jacket that works with almost any outfit.',
                    'category' => 'Jackets',
                    'price' => 79.99,
                    'colors' => ['Blue', 'Black'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Relaxed Cargo Shorts',
                    'description' => 'Comfortable cargo shorts with multiple practical pockets.',
                    'category' => 'Shorts',
                    'price' => 34.99,
                    'colors' => ['Black', 'Green', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Urban Runner Sneakers',
                    'description' => 'Lightweight sneakers designed for everyday comfort and movement.',
                    'category' => 'Shoes',
                    'price' => 89.99,
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],
            ];

            $productIds = [];
            $variantIds = [];


            /*
            |--------------------------------------------------------------------------
            | CREATE PRODUCTS
            |--------------------------------------------------------------------------
            */

            foreach ($products as $product) {

                /*
                |--------------------------------------------------------------------------
                | PRODUCT
                |--------------------------------------------------------------------------
                */

                $productId = DB::table('products')->insertGetId([
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'category_id' => $categoryIds[$product['category']],
                ]);

                $productIds[] = $productId;


                /*
                |--------------------------------------------------------------------------
                | PRODUCT IMAGES
                |--------------------------------------------------------------------------
                |
                | Pick 2 random images from public/images.
                |
                */

                $selectedImages = collect($imageFiles)
                    ->shuffle()
                    ->take(2);

                foreach ($selectedImages as $image) {

                    /*
                    | Copy the image to:
                    |
                    | storage/app/public/products
                    |
                    | Laravel automatically generates
                    | a random filename.
                    */

                    $path = Storage::disk('public')->putFile(
                        'products',
                        new File($image)
                    );

                    DB::table('product_images')->insert([
                        'product_id' => $productId,
                        'path' => $path,
                    ]);
                }


                /*
                |--------------------------------------------------------------------------
                | VARIANTS
                |--------------------------------------------------------------------------
                */

                foreach ($product['colors'] as $color) {
                    foreach ($product['sizes'] as $size) {

                        $variantId = DB::table('variants')->insertGetId([
                            'product_id' => $productId,
                            'color_id' => $colorIds[$color],
                            'size_id' => $sizeIds[$size],
                            'price' => $product['price'],
                        ]);

                        $variantIds[] = $variantId;
                    }
                }
            }


            /*
            |--------------------------------------------------------------------------
            | REVIEWS
            |--------------------------------------------------------------------------
            */

            DB::table('reviews')->insert([
                [
                    'review' => 'Really comfortable and excellent quality.',
                    'rating' => 5,
                    'user_id' => $users[0],
                    'product_id' => $productIds[0],
                ],

                [
                    'review' => 'Great t-shirt for everyday wear.',
                    'rating' => 4,
                    'user_id' => $users[1],
                    'product_id' => $productIds[0],
                ],

                [
                    'review' => 'The oversized fit looks really good.',
                    'rating' => 5,
                    'user_id' => $users[2],
                    'product_id' => $productIds[1],
                ],

                [
                    'review' => 'Very nice shirt and excellent material.',
                    'rating' => 5,
                    'user_id' => $users[3],
                    'product_id' => $productIds[2],
                ],

                [
                    'review' => 'Good quality jeans and comfortable fit.',
                    'rating' => 4,
                    'user_id' => $users[4],
                    'product_id' => $productIds[3],
                ],

                [
                    'review' => 'Very warm and comfortable hoodie.',
                    'rating' => 5,
                    'user_id' => $users[5],
                    'product_id' => $productIds[4],
                ],

                [
                    'review' => 'Classic jacket. Looks great.',
                    'rating' => 4,
                    'user_id' => $users[6],
                    'product_id' => $productIds[5],
                ],

                [
                    'review' => 'Really comfortable sneakers.',
                    'rating' => 5,
                    'user_id' => $users[7],
                    'product_id' => $productIds[7],
                ],
            ]);


            /*
            |--------------------------------------------------------------------------
            | CARTS
            |--------------------------------------------------------------------------
            */

            $cartIds = [];

            foreach ($users as $userId) {
                $cartIds[$userId] = DB::table('carts')->insertGetId([
                    'user_id' => $userId,
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | CART ITEMS
            |--------------------------------------------------------------------------
            */

            DB::table('cart_variant')->insert([
                [
                    'cart_id' => $cartIds[$users[0]],
                    'variant_id' => $variantIds[0],
                    'quantity' => 2,
                ],

                [
                    'cart_id' => $cartIds[$users[0]],
                    'variant_id' => $variantIds[1],
                    'quantity' => 1,
                ],

                [
                    'cart_id' => $cartIds[$users[1]],
                    'variant_id' => $variantIds[20],
                    'quantity' => 1,
                ],

                [
                    'cart_id' => $cartIds[$users[2]],
                    'variant_id' => $variantIds[30],
                    'quantity' => 2,
                ],
            ]);


            /*
            |--------------------------------------------------------------------------
            | ORDERS
            |--------------------------------------------------------------------------
            */

            $order1 = DB::table('orders')->insertGetId([
                'user_id' => $users[0],
                'status' => 'delivered',
                'total' => 69.97,
                'delivery_fee' => 5.00,
            ]);

            $order2 = DB::table('orders')->insertGetId([
                'user_id' => $users[1],
                'status' => 'processing',
                'total' => 84.98,
                'delivery_fee' => 5.00,
            ]);

            $order3 = DB::table('orders')->insertGetId([
                'user_id' => $users[2],
                'status' => 'pending',
                'total' => 94.99,
                'delivery_fee' => 5.00,
            ]);


            /*
            |--------------------------------------------------------------------------
            | ORDER ITEMS
            |--------------------------------------------------------------------------
            */

            DB::table('order_variant')->insert([
                [
                    'order_id' => $order1,
                    'variant_id' => $variantIds[0],
                    'quantity' => 2,
                    'price' => 19.99,
                ],

                [
                    'order_id' => $order1,
                    'variant_id' => $variantIds[5],
                    'quantity' => 1,
                    'price' => 29.99,
                ],

                [
                    'order_id' => $order2,
                    'variant_id' => $variantIds[20],
                    'quantity' => 1,
                    'price' => 49.99,
                ],

                [
                    'order_id' => $order2,
                    'variant_id' => $variantIds[21],
                    'quantity' => 1,
                    'price' => 29.99,
                ],

                [
                    'order_id' => $order3,
                    'variant_id' => $variantIds[40],
                    'quantity' => 1,
                    'price' => 89.99,
                ],
            ]);
        });
    }
}