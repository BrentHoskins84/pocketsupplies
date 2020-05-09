<?php

use App\Product;
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
        Product::create([
            'name' => 'Test Product 6',
            'slug' => 'test_product-6',
            'details' => '15 inch, laptop',
            'price' => '1999',
            'description' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        ]);

        Product::create([
            'name' => 'Test Product 2',
            'slug' => 'test_product-2',
            'details' => '15 inch, laptop',
            'price' => '1999',
            'description' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        ]);

        Product::create([
            'name' => 'Test Product 3',
            'slug' => 'test_product-3',
            'details' => '15 inch, laptop',
            'price' => '1999',
            'description' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        ]);

        Product::create([
            'name' => 'Test Product 4',
            'slug' => 'test_product-4',
            'details' => '15 inch, laptop',
            'price' => '1999',
            'description' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        ]);

        Product::create([
            'name' => 'Test Product 5',
            'slug' => 'test_product-5',
            'details' => '15 inch, laptop',
            'price' => '1999',
            'description' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        ]);
    }
}
