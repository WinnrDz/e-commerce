<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;

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
            | CLEAR DATABASE
            |--------------------------------------------------------------------------
            */

            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            foreach ([
                'order_variant',
                'cart_variant',
                'reviews',
                'product_tag',
                'variants',
                'product_images',
                'orders',
                'carts',
                'products',
                'tags',
                'sizes',
                'colors',
                'categories',
                'users',
            ] as $table) {
                DB::table($table)->delete();
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');


            /*
            |--------------------------------------------------------------------------
            | CATEGORIES
            |--------------------------------------------------------------------------
            */

            $categories = [
                'T-Shirts',
                'Shirts',
                'Jeans',
                'Pants',
                'Hoodies',
                'Jackets',
                'Coats',
                'Shoes',
                'Shorts',
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
            |
            | Product colors are detected automatically from image filenames.
            |
            | Example:
            |
            | Black.png  -> Black
            | Green.png  -> Green
            | Khaki.png  -> Khaki
            | Camel.png  -> Camel
            |
            */

            $colorDefinitions = [
                'Black' => '#000000',
                'White' => '#FFFFFF',
                'Red' => '#EF4444',
                'Blue' => '#3B82F6',
                'Green' => '#22C55E',
                'Yellow' => '#EAB308',
                'Gray' => '#6B7280',
                'Brown' => '#92400E',
                'Beige' => '#D6C2A5',
                'Khaki' => '#C3B091',
                'Navy' => '#1E3A5F',
                'Olive' => '#556B2F',
                'Orange' => '#F97316',
                'Purple' => '#A855F7',
                'Pink' => '#EC4899',

                // Added because Tailored Long Overcoat contains Camel.png
                'Camel' => '#C19A6B',
            ];

            $colorIds = [];

            foreach ($colorDefinitions as $name => $hexCode) {
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
            | TAGS
            |--------------------------------------------------------------------------
            */

            $tags = [
                'new',
                'Popular',
                'Best Seller',
                'Trending',
                'Sale',
                'Featured',
                'Casual',
                'Formal',
                'Party',
                'Streetwear',
                'Winter',
                'Premium',
                'Outdoor',
                'Gym',
            ];

            $tagIds = [];

            foreach ($tags as $name) {
                $tagIds[$name] = DB::table('tags')->insertGetId([
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
            |
            | Colors are NOT manually defined here.
            |
            | They are detected automatically from:
            |
            | public/images/Mockups/{folder}/Color.png
            |
            */

            $products = [

                [
                    'folder' => 'Cargo Pants',
                    'name' => 'Urban Utility Cargo Pants',
                    'description' => 'Relaxed utility cargo pants with a contemporary silhouette, practical pockets and an effortless streetwear feel.',
                    'category' => 'Pants',
                    'base_price' => 54.99,
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                    'tags' => ['new', 'Trending', 'Streetwear', 'Casual', 'Gym'],
                ],

                [
                    'folder' => 'Chino Pants',
                    'name' => 'Essential Slim Chino Pants',
                    'description' => 'Clean-cut chino pants made for everyday styling, combining a polished appearance with comfortable movement.',
                    'category' => 'Pants',
                    'base_price' => 49.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Popular', 'Casual', 'Formal'],
                ],

                [
                    'folder' => 'Classic Denim Trucker Jacket',
                    'name' => 'Classic Denim Trucker Jacket',
                    'description' => 'A timeless denim trucker jacket with a structured fit and authentic everyday character.',
                    'category' => 'Jackets',
                    'base_price' => 79.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Best Seller', 'Popular', 'Casual', 'Trending'],
                ],

                [
                    'folder' => 'Classic Leather Biker Jacket',
                    'name' => 'Classic Leather Biker Jacket',
                    'description' => 'A bold leather biker jacket with a refined finish and unmistakable timeless attitude.',
                    'category' => 'Jackets',
                    'base_price' => 149.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Premium', 'Featured', 'Trending', 'Streetwear', 'Party'],
                ],

                [
                    'folder' => 'Crew-Neck T-Shirt',
                    'name' => 'Essential Crew-Neck T-Shirt',
                    'description' => 'A versatile everyday crew-neck t-shirt with a clean silhouette and soft comfortable feel.',
                    'category' => 'T-Shirts',
                    'base_price' => 24.99,
                    'sizes' => ['XS', 'S', 'M', 'L', 'XL', 'XXL'],
                    'tags' => ['Best Seller', 'Popular', 'Casual'],
                ],

                [
                    'folder' => 'Denim Jeans',
                    'name' => 'Classic Straight-Leg Denim Jeans',
                    'description' => 'Reliable everyday denim with a classic straight-leg profile designed to work with almost any wardrobe.',
                    'category' => 'Jeans',
                    'base_price' => 64.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Popular', 'Best Seller', 'Casual'],
                ],

                [
                    'folder' => 'Hoodie',
                    'name' => 'Heavyweight Essential Hoodie',
                    'description' => 'A cozy heavyweight hoodie with a relaxed fit, perfect for layering through cooler days.',
                    'category' => 'Hoodies',
                    'base_price' => 59.99,
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                    'tags' => ['new', 'Popular', 'Casual', 'Gym', 'Winter'],
                ],

                [
                    'folder' => 'Leather Lace-Up Boots',
                    'name' => 'Heritage Leather Lace-Up Boots',
                    'description' => 'Durable leather lace-up boots combining rugged construction with a clean modern profile.',
                    'category' => 'Shoes',
                    'base_price' => 119.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Premium', 'Featured', 'Outdoor', 'Formal'],
                ],

                [
                    'folder' => 'Olive Bomber Jacket',
                    'name' => 'Olive Flight Bomber Jacket',
                    'description' => 'A modern bomber jacket in an understated olive tone, designed for effortless everyday layering.',
                    'category' => 'Jackets',
                    'base_price' => 89.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['new', 'Trending', 'Streetwear', 'Casual'],
                ],

                [
                    'folder' => 'Oversized Crewneck Sweatshirt',
                    'name' => 'Oversized Essential Crewneck',
                    'description' => 'A relaxed oversized sweatshirt with a contemporary shape and comfortable everyday construction.',
                    'category' => 'Hoodies',
                    'base_price' => 54.99,
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                    'tags' => ['new', 'Trending', 'Streetwear', 'Casual', 'Party'],
                ],

                [
                    'folder' => 'Quilted Puffer Jacket',
                    'name' => 'Alpine Quilted Puffer Jacket',
                    'description' => 'A warm quilted puffer jacket designed to provide lightweight insulation without sacrificing a clean silhouette.',
                    'category' => 'Jackets',
                    'base_price' => 109.99,
                    'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                    'tags' => ['new', 'Winter', 'Featured', 'Outdoor'],
                ],

                [
                    'folder' => 'Sneakers',
                    'name' => 'Everyday Court Sneakers',
                    'description' => 'Minimal everyday sneakers with a versatile low-profile design made for comfort and daily movement.',
                    'category' => 'Shoes',
                    'base_price' => 84.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Best Seller', 'Popular', 'Casual', 'Gym'],
                ],

                [
                    'folder' => 'Tailored Long Overcoat',
                    'name' => 'Modern Tailored Long Overcoat',
                    'description' => 'A sophisticated long overcoat with a refined tailored silhouette, ideal for elevated everyday outfits.',
                    'category' => 'Coats',
                    'base_price' => 139.99,
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'tags' => ['Premium', 'Featured', 'Formal', 'Winter'],
                ],
            ];


            /*
            |--------------------------------------------------------------------------
            | PRODUCT / VARIANT STORAGE
            |--------------------------------------------------------------------------
            */

            $productIds = [];
            $variantIds = [];
            $variantPrices = [];
            $variantsByProduct = [];


            /*
            |--------------------------------------------------------------------------
            | CREATE PRODUCTS
            |--------------------------------------------------------------------------
            */

            foreach ($products as $product) {

                /*
                |--------------------------------------------------------------------------
                | PRODUCT IMAGE FOLDER
                |--------------------------------------------------------------------------
                */

                $folderPath = public_path(
                    'images/Mockups/' . $product['folder']
                );

                if (!is_dir($folderPath)) {
                    throw new \Exception(
                        "Product image folder not found: {$folderPath}"
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | FIND IMAGES
                |--------------------------------------------------------------------------
                */

                $images = glob($folderPath . '/*');

                $images = array_filter($images, function ($file) {
                    return is_file($file);
                });

                if (empty($images)) {
                    throw new \Exception(
                        "No images found in: {$folderPath}"
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | SORT IMAGES
                |--------------------------------------------------------------------------
                */

                usort($images, function ($a, $b) {
                    return strnatcasecmp(
                        basename($a),
                        basename($b)
                    );
                });


                /*
                |--------------------------------------------------------------------------
                | DETECT PRODUCT COLORS FROM FILENAMES
                |--------------------------------------------------------------------------
                |
                | Example:
                |
                | Cargo Pants/
                |     Black.png
                |     Green.png
                |
                | becomes:
                |
                | ['Black', 'Green']
                |
                */

                $productColors = [];

                foreach ($images as $image) {

                    $colorName = pathinfo(
                        basename($image),
                        PATHINFO_FILENAME
                    );

                    $colorName = trim($colorName);

                    if ($colorName === '') {
                        continue;
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | CHECK COLOR EXISTS
                    |--------------------------------------------------------------------------
                    */

                    if (!isset($colorIds[$colorName])) {
                        throw new \Exception(
                            "Unknown color '{$colorName}' found in " .
                            "{$product['folder']}/" .
                            basename($image) .
                            ". Add this color to \$colorDefinitions."
                        );
                    }

                    $productColors[] = $colorName;
                }


                /*
                |--------------------------------------------------------------------------
                | REMOVE DUPLICATE COLORS
                |--------------------------------------------------------------------------
                */

                $productColors = array_values(
                    array_unique($productColors)
                );

                if (empty($productColors)) {
                    throw new \Exception(
                        "No colors detected for product: {$product['name']}"
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | CREATE PRODUCT
                |--------------------------------------------------------------------------
                */

                $productId = DB::table('products')->insertGetId([
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'category_id' => $categoryIds[$product['category']],
                    'base_price' => $product['base_price'],
                ]);

                $productIds[] = $productId;


                /*
                |--------------------------------------------------------------------------
                | COPY PRODUCT IMAGES
                |--------------------------------------------------------------------------
                */

                $productSlug = Str::slug($product['name']);

                foreach ($images as $image) {

                    $filename = basename($image);

                    Storage::disk('public')->putFileAs(
                        "products/{$productSlug}",
                        new File($image),
                        $filename
                    );

                    DB::table('product_images')->insert([
                        'product_id' => $productId,
                        'path' => "products/{$productSlug}/{$filename}",
                    ]);
                }


                /*
                |--------------------------------------------------------------------------
                | PRODUCT TAGS
                |--------------------------------------------------------------------------
                */

                foreach ($product['tags'] as $tag) {

                    if (!isset($tagIds[$tag])) {
                        throw new \Exception(
                            "Tag '{$tag}' does not exist."
                        );
                    }

                    DB::table('product_tag')->insert([
                        'product_id' => $productId,
                        'tag_id' => $tagIds[$tag],
                    ]);
                }


                /*
                |--------------------------------------------------------------------------
                | CREATE VARIANTS
                |--------------------------------------------------------------------------
                |
                | Variants are generated from the ACTUAL image colors.
                |
                | Example:
                |
                | Black.png
                | Green.png
                |
                | Creates:
                |
                | Black + S
                | Black + M
                | Black + L
                | Black + XL
                |
                | Green + S
                | Green + M
                | Green + L
                | Green + XL
                |
                */

                $variantsByProduct[$productId] = [];

                foreach ($productColors as $color) {

                    foreach ($product['sizes'] as $size) {

                        $addedPrice = 0.00;

                        $variantId = DB::table('variants')->insertGetId([
                            'product_id' => $productId,
                            'color_id' => $colorIds[$color],
                            'size_id' => $sizeIds[$size],
                            'added_price' => $addedPrice,
                        ]);

                        $variantIds[] = $variantId;

                        $variantsByProduct[$productId][] = $variantId;

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

            $reviewTexts = [
                [
                    5,
                    'The quality is excellent. Looks even better in person.',
                ],
                [
                    5,
                    'Really happy with the fit and overall quality.',
                ],
                [
                    4,
                    'Great piece for everyday wear. Very comfortable.',
                ],
                [
                    5,
                    'Exactly what I was looking for. Highly recommended.',
                ],
                [
                    4,
                    'Nice material and a really good fit.',
                ],
                [
                    5,
                    'Looks premium and feels great to wear.',
                ],
            ];

            foreach ($productIds as $index => $productId) {

                $numberOfReviews = rand(1, 3);

                for ($i = 0; $i < $numberOfReviews; $i++) {

                    $review = $reviewTexts[
                        ($index + $i) % count($reviewTexts)
                    ];

                    DB::table('reviews')->insert([
                        'review' => $review[1],
                        'rating' => $review[0],
                        'user_id' => $users[
                            ($index + $i) % count($users)
                        ],
                        'product_id' => $productId,
                        'created_at' => now()->subDays(rand(1, 90)),
                        'updated_at' => now(),
                    ]);
                }
            }


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

            $cartExamples = [
                0 => [
                    $productIds[0],
                    $productIds[4],
                ],

                1 => [
                    $productIds[2],
                    $productIds[5],
                ],

                2 => [
                    $productIds[6],
                    $productIds[9],
                ],

                3 => [
                    $productIds[7],
                ],
            ];

            foreach ($cartExamples as $userIndex => $cartProducts) {

                foreach ($cartProducts as $productId) {

                    if (empty($variantsByProduct[$productId])) {
                        continue;
                    }

                    $variantId = $variantsByProduct[$productId][
                        rand(
                            0,
                            count($variantsByProduct[$productId]) - 1
                        )
                    ];

                    DB::table('cart_variant')->insert([
                        'cart_id' => $cartIds[$users[$userIndex]],
                        'variant_id' => $variantId,
                        'quantity' => rand(1, 2),
                    ]);
                }
            }


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
            */

            $orders = [
                [
                    'user_id' => $users[0],
                    'status' => 'delivered',
                    'days_ago' => 32,
                    'products' => [
                        [$productIds[0], 2],
                        [$productIds[4], 1],
                        [$productIds[5], 1],
                    ],
                ],

                [
                    'user_id' => $users[1],
                    'status' => 'confirmed',
                    'days_ago' => 7,
                    'products' => [
                        [$productIds[2], 1],
                        [$productIds[7], 1],
                        [$productIds[11], 1],
                    ],
                ],

                [
                    'user_id' => $users[2],
                    'status' => 'pending',
                    'days_ago' => 2,
                    'products' => [
                        [$productIds[1], 1],
                        [$productIds[6], 1],
                        [$productIds[9], 1],
                    ],
                ],

                [
                    'user_id' => $users[3],
                    'status' => 'shipped',
                    'days_ago' => 4,
                    'products' => [
                        [$productIds[3], 1],
                        [$productIds[8], 1],
                        [$productIds[12], 1],
                    ],
                ],

                [
                    'user_id' => $users[4],
                    'status' => 'cancelled',
                    'days_ago' => 15,
                    'products' => [
                        [$productIds[0], 1],
                        [$productIds[10], 1],
                    ],
                ],

                [
                    'user_id' => $users[5],
                    'status' => 'delivered',
                    'days_ago' => 45,
                    'products' => [
                        [$productIds[4], 2],
                        [$productIds[5], 1],
                        [$productIds[7], 1],
                        [$productIds[11], 1],
                    ],
                ],
            ];


            /*
            |--------------------------------------------------------------------------
            | CREATE ORDERS + ORDER ITEMS
            |--------------------------------------------------------------------------
            */

            foreach ($orders as $orderData) {

                $createdAt = now()->subDays(
                    $orderData['days_ago']
                );


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

                foreach ($orderData['products'] as $item) {

                    $productId = $item[0];
                    $quantity = $item[1];

                    $availableVariants =
                        $variantsByProduct[$productId];

                    if (empty($availableVariants)) {
                        continue;
                    }

                    $variantId = $availableVariants[
                        array_rand($availableVariants)
                    ];

                    $price = $variantPrices[$variantId];

                    DB::table('order_variant')->insert([
                        'order_id' => $orderId,
                        'variant_id' => $variantId,
                        'quantity' => $quantity,
                        'price' => $price,
                    ]);

                    $subtotal += $price * $quantity;
                }


                /*
                |--------------------------------------------------------------------------
                | CALCULATE ORDER TOTAL
                |--------------------------------------------------------------------------
                */

                $total = $subtotal + $deliveryFee;

                DB::table('orders')
                    ->where('id', $orderId)
                    ->update([
                        'total' => round($total, 2),
                    ]);
            }
        });
    }
}