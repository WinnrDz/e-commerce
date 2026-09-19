<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            /*
            |--------------------------------------------------------------------------
            | CLEAR STORAGE
            |--------------------------------------------------------------------------
            */

            Storage::disk('public')->deleteDirectory('products');


            /*
            |--------------------------------------------------------------------------
            | PRODUCT IMAGES
            |--------------------------------------------------------------------------
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
                    'base_price' => 19.99,
                    'colors' => ['Black', 'White', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Oversized Streetwear T-Shirt',
                    'description' => 'An oversized t-shirt designed for a relaxed modern streetwear look.',
                    'category' => 'T-Shirts',
                    'base_price' => 29.99,
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                ],

                [
                    'name' => 'Premium Oxford Shirt',
                    'description' => 'A premium Oxford shirt suitable for both casual and formal outfits.',
                    'category' => 'Shirts',
                    'base_price' => 49.99,
                    'colors' => ['White', 'Blue', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Slim Fit Jeans',
                    'description' => 'Modern slim fit jeans made from durable stretch denim.',
                    'category' => 'Jeans',
                    'base_price' => 59.99,
                    'colors' => ['Blue', 'Black'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Essential Pullover Hoodie',
                    'description' => 'A warm and comfortable hoodie with a simple minimal design.',
                    'category' => 'Hoodies',
                    'base_price' => 54.99,
                    'colors' => ['Black', 'Gray', 'Green'],
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                ],

                [
                    'name' => 'Classic Denim Jacket',
                    'description' => 'A timeless denim jacket that works with almost any outfit.',
                    'category' => 'Jackets',
                    'base_price' => 79.99,
                    'colors' => ['Blue', 'Black'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Relaxed Cargo Shorts',
                    'description' => 'Comfortable cargo shorts with multiple practical pockets.',
                    'category' => 'Shorts',
                    'base_price' => 34.99,
                    'colors' => ['Black', 'Green', 'Gray'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],

                [
                    'name' => 'Urban Runner Sneakers',
                    'description' => 'Lightweight sneakers designed for everyday comfort and movement.',
                    'category' => 'Shoes',
                    'base_price' => 89.99,
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                ],
            ];


            $productIds = [];
            $variantIds = [];

            // Stores the actual price of every variant.
            $variantPrices = [];


            /*
            |--------------------------------------------------------------------------
            | CREATE PRODUCTS
            |--------------------------------------------------------------------------
            */

            foreach ($products as $product) {

                $productId = DB::table('products')->insertGetId([
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'category_id' => $categoryIds[$product['category']],
                    'base_price' => $product['base_price'],
                ]);

                $productIds[] = $productId;


                /*
                |--------------------------------------------------------------------------
                | PRODUCT IMAGES
                |--------------------------------------------------------------------------
                */

                $selectedImages = collect($imageFiles)
                    ->shuffle()
                    ->take(2);

                foreach ($selectedImages as $image) {

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

                        $addedPrice = 0.00;

                        $variantId = DB::table('variants')->insertGetId([
                            'product_id' => $productId,
                            'color_id' => $colorIds[$color],
                            'size_id' => $sizeIds[$size],
                            'added_price' => $addedPrice,
                        ]);

                        $variantIds[] = $variantId;

                        /*
                        | Actual variant price:
                        | product base price + variant added price
                        */
                        $variantPrices[$variantId] =
                            $product['base_price'] + $addedPrice;
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
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Great t-shirt for everyday wear.',
                    'rating' => 4,
                    'user_id' => $users[1],
                    'product_id' => $productIds[0],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'The oversized fit looks really good.',
                    'rating' => 5,
                    'user_id' => $users[2],
                    'product_id' => $productIds[1],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Very nice shirt and excellent material.',
                    'rating' => 5,
                    'user_id' => $users[3],
                    'product_id' => $productIds[2],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Good quality jeans and comfortable fit.',
                    'rating' => 4,
                    'user_id' => $users[4],
                    'product_id' => $productIds[3],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Very warm and comfortable hoodie.',
                    'rating' => 5,
                    'user_id' => $users[5],
                    'product_id' => $productIds[4],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Classic jacket. Looks great.',
                    'rating' => 4,
                    'user_id' => $users[6],
                    'product_id' => $productIds[5],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'review' => 'Really comfortable sneakers.',
                    'rating' => 5,
                    'user_id' => $users[7],
                    'product_id' => $productIds[7],
                    'created_at' => now(),
                    'updated_at' => now(),
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
            | DELIVERY FEE
            |--------------------------------------------------------------------------
            */

            $deliveryFee = 5.00;


            /*
            |--------------------------------------------------------------------------
            | ORDERS
            |--------------------------------------------------------------------------
            |
            | The total is NOT manually entered anymore.
            | It is calculated after inserting the order items.
            |
            */

            $orders = [
                [
                    'user_id' => $users[0],
                    'status' => 'delivered',
                    'days_ago' => 32,
                    'items' => [
                        [
                            'variant_id' => $variantIds[0],
                            'quantity' => 2,
                        ],
                        [
                            'variant_id' => $variantIds[5],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[12],
                            'quantity' => 1,
                        ],
                    ],
                ],

                [
                    'user_id' => $users[1],
                    'status' => 'confirmed',
                    'days_ago' => 7,
                    'items' => [
                        [
                            'variant_id' => $variantIds[20],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[21],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[30],
                            'quantity' => 1,
                        ],
                    ],
                ],

                [
                    'user_id' => $users[2],
                    'status' => 'pending',
                    'days_ago' => 2,
                    'items' => [
                        [
                            'variant_id' => $variantIds[2],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[25],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[40],
                            'quantity' => 1,
                        ],
                    ],
                ],

                [
                    'user_id' => $users[3],
                    'status' => 'shipped',
                    'days_ago' => 4,
                    'items' => [
                        [
                            'variant_id' => $variantIds[6],
                            'quantity' => 2,
                        ],
                        [
                            'variant_id' => $variantIds[10],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[36],
                            'quantity' => 1,
                        ],
                    ],
                ],

                [
                    'user_id' => $users[4],
                    'status' => 'cancelled',
                    'days_ago' => 15,
                    'items' => [
                        [
                            'variant_id' => $variantIds[16],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[45],
                            'quantity' => 1,
                        ],
                    ],
                ],

                [
                    'user_id' => $users[5],
                    'status' => 'delivered',
                    'days_ago' => 45,
                    'items' => [
                        [
                            'variant_id' => $variantIds[1],
                            'quantity' => 2,
                        ],
                        [
                            'variant_id' => $variantIds[15],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[28],
                            'quantity' => 1,
                        ],
                        [
                            'variant_id' => $variantIds[50],
                            'quantity' => 1,
                        ],
                    ],
                ],
            ];


            /*
            |--------------------------------------------------------------------------
            | CREATE ORDERS + ORDER ITEMS
            |--------------------------------------------------------------------------
            */

            foreach ($orders as $orderData) {

                $createdAt = now()->subDays($orderData['days_ago']);


                /*
                |--------------------------------------------------------------------------
                | CREATE ORDER
                |--------------------------------------------------------------------------
                */

                $orderId = DB::table('orders')->insertGetId([
                    'user_id' => $orderData['user_id'],
                    'status' => $orderData['status'],
                    'total' => 0,
                    'delivery_fee' => $deliveryFee,
                    'created_at' => $createdAt,
                    'updated_at' => $createdAt,
                ]);


                /*
                |--------------------------------------------------------------------------
                | CREATE ORDER ITEMS
                |--------------------------------------------------------------------------
                */

                $subtotal = 0;

                foreach ($orderData['items'] as $item) {

                    $variantId = $item['variant_id'];
                    $quantity = $item['quantity'];

                    // Get the actual price of this variant.
                    $price = $variantPrices[$variantId];

                    DB::table('order_variant')->insert([
                        'order_id' => $orderId,
                        'variant_id' => $variantId,
                        'quantity' => $quantity,
                        'price' => $price,
                    ]);

                    /*
                    | Line total = price × quantity
                    */
                    $subtotal += $price * $quantity;
                }


                /*
                |--------------------------------------------------------------------------
                | CALCULATE ORDER TOTAL
                |--------------------------------------------------------------------------
                */

                $total = $subtotal + $deliveryFee;


                /*
                |--------------------------------------------------------------------------
                | UPDATE ORDER TOTAL
                |--------------------------------------------------------------------------
                */

                DB::table('orders')
                    ->where('id', $orderId)
                    ->update([
                        'total' => round($total, 2),
                    ]);
            }
        });
    }
}