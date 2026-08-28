<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\Size;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | ADMIN
        |--------------------------------------------------------------------------
        */

        $admin = User::create([
            'name' => 'Demo Admin',
            'email' => 'admin@demo.local',
            'password' => Hash::make('demo'),
        ]);

        /*
        |--------------------------------------------------------------------------
        | FAKE CUSTOMERS
        |--------------------------------------------------------------------------
        */

        $customers = User::factory(10)->create();

        /*
        |--------------------------------------------------------------------------
        | CATEGORIES
        |--------------------------------------------------------------------------
        */

        $categories = [];

        foreach ([
            'T-Shirts',
            'Jeans',
            'Hoodies',
            'Shoes',
            'Accessories',
        ] as $name) {
            $categories[$name] = Category::create([
                'name' => $name,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | COLORS
        |--------------------------------------------------------------------------
        */

        $colors = [];

        foreach ([
            ['name' => 'Black', 'hex_code' => '#000000'],
            ['name' => 'White', 'hex_code' => '#FFFFFF'],
            ['name' => 'Red', 'hex_code' => '#EF4444'],
            ['name' => 'Blue', 'hex_code' => '#3B82F6'],
        ] as $color) {
            $colors[$color['name']] = Color::create($color);
        }

        /*
        |--------------------------------------------------------------------------
        | SIZES
        |--------------------------------------------------------------------------
        */

        $sizes = [];

        foreach (['XS', 'S', 'M', 'L', 'XL'] as $name) {
            $sizes[$name] = Size::create([
                'name' => $name,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | PRODUCTS
        |--------------------------------------------------------------------------
        */

        $productData = [
            ['Classic Black T-Shirt', 'A comfortable everyday cotton t-shirt.', 'T-Shirts', 19.99, 'Black'],
            ['Essential White T-Shirt', 'A clean and simple white t-shirt.', 'T-Shirts', 19.99, 'White'],
            ['Oversized Red T-Shirt', 'Relaxed oversized fit for casual outfits.', 'T-Shirts', 24.99, 'Red'],

            ['Slim Fit Jeans', 'Modern slim-fit jeans with stretch.', 'Jeans', 49.99, 'Blue'],
            ['Classic Black Jeans', 'Timeless black denim jeans.', 'Jeans', 54.99, 'Black'],
            ['Relaxed Blue Jeans', 'Comfortable relaxed-fit denim.', 'Jeans', 52.99, 'Blue'],

            ['Classic Black Hoodie', 'Warm and comfortable everyday hoodie.', 'Hoodies', 59.99, 'Black'],
            ['Red Street Hoodie', 'Stylish oversized streetwear hoodie.', 'Hoodies', 64.99, 'Red'],
            ['Essential White Hoodie', 'Minimal white hoodie with soft fabric.', 'Hoodies', 59.99, 'White'],

            ['Everyday Sneakers', 'Lightweight sneakers for everyday use.', 'Shoes', 79.99, 'White'],
            ['Black Running Shoes', 'Comfortable running shoes with a lightweight sole.', 'Shoes', 89.99, 'Black'],
            ['Classic Blue Sneakers', 'Casual sneakers with a clean design.', 'Shoes', 74.99, 'Blue'],

            ['Classic Cap', 'Minimal adjustable baseball cap.', 'Accessories', 14.99, 'Black'],
            ['White Cap', 'Simple everyday white cap.', 'Accessories', 14.99, 'White'],
            ['Red Crossbody Bag', 'Compact crossbody bag for everyday use.', 'Accessories', 34.99, 'Red'],
        ];

        $variants = collect();

        foreach ($productData as $data) {

            $product = Product::create([
                'name' => $data[0],
                'description' => $data[1],
                'category_id' => $categories[$data[2]]->id,
            ]);

            /*
            |--------------------------------------------------------------------------
            | PRODUCT VARIANTS
            |--------------------------------------------------------------------------
            */

            foreach ($sizes as $size) {

                $variant = Variant::create([
                    'product_id' => $product->id,
                    'color_id' => $colors[$data[4]]->id,
                    'size_id' => $size->id,
                    'price' => $data[3],
                ]);

                $variants->push($variant);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | CUSTOMER DATA
        |--------------------------------------------------------------------------
        */

        foreach ($customers as $customer) {

            /*
            |--------------------------------------------------------------------------
            | CART
            |--------------------------------------------------------------------------
            */

            $cart = Cart::create([
                'user_id' => $customer->id,
            ]);

            /*
            |--------------------------------------------------------------------------
            | RANDOM CART ITEMS
            |--------------------------------------------------------------------------
            */

            $cartVariants = $variants
                ->random(rand(1, 4))
                ->unique('id');

            foreach ($cartVariants as $variant) {
                $cart->variants()->attach(
                    $variant->id,
                    [
                        'quantity' => rand(1, 3),
                    ]
                );
            }

            /*
            |--------------------------------------------------------------------------
            | REVIEWS
            |--------------------------------------------------------------------------
            */

            $reviewProducts = Product::inRandomOrder()
                ->limit(rand(1, 3))
                ->get();

            foreach ($reviewProducts as $product) {

                Review::create([
                    'review' => fake()->randomElement([
                        'Really good quality!',
                        'I love this product.',
                        'Looks exactly like the pictures.',
                        'Very comfortable and well made.',
                        'Great product for the price.',
                        'Would definitely buy again.',
                        'Pretty good overall.',
                        'Fast delivery and great quality.',
                    ]),
                    'rating' => rand(3, 5),
                    'user_id' => $customer->id,
                    'product_id' => $product->id,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | ORDERS
            |--------------------------------------------------------------------------
            */

            $numberOfOrders = rand(1, 3);

            for ($i = 0; $i < $numberOfOrders; $i++) {

                $orderVariants = $variants
                    ->random(rand(1, 4))
                    ->unique('id');

                $total = 0;

                foreach ($orderVariants as $variant) {
                    $quantity = rand(1, 3);

                    $total += $variant->price * $quantity;
                }

                /*
                |--------------------------------------------------------------------------
                | ORDER
                |--------------------------------------------------------------------------
                */

                $order = Order::create([
                    'user_id' => $customer->id,
                    'total' => $total,
                    'status' => fake()->randomElement([
                        'pending',
                        'processing',
                        'shipped',
                        'completed',
                        'cancelled',
                    ]),
                ]);

                /*
                |--------------------------------------------------------------------------
                | ORDER ITEMS
                |--------------------------------------------------------------------------
                */

                foreach ($orderVariants as $variant) {

                    $quantity = rand(1, 3);

                    $order->variants()->attach(
                        $variant->id,
                        [
                            'quantity' => $quantity,
                            'price' => $variant->price,
                        ]
                    );
                }
            }
        }
    }
}

