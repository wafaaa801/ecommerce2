<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'images/product-1.jpg',
        	'title' => 'Bell Pepper',
        	'price' => 80.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-2.jpg',
        	'title' => 'Strawberry',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-3.jpg',
        	'title' => 'Green Beans',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-4.jpg',
        	'title' => 'Purple Cabbage',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-5.jpg',
        	'title' => 'Tomato',
        	'price' => 80.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-6.jpg',
        	'title' => 'Broccoli',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-7.jpg',
        	'title' => 'Carrots',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();$product = new \App\Product([
        	'imagePath' => 'images/product-8.jpg',
        	'title' => 'Fruit Juice',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-9.jpg',
        	'title' => 'Onion',
        	'price' => 80.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-10.jpg',
        	'title' => 'Apple',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-11.jpg',
        	'title' => 'Garlic',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'images/product-12.jpg',
        	'title' => 'Chilli',
        	'price' => 120.0
        ]);// $this->call(UsersTableSeeder::class);

        $product->save();
    
    }
}
