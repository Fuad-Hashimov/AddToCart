<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung',
                'details' => 'S24 , 16Gpu, 32GB 512Gb SSD',
                'decsription' => 'Wondering where the cool museum that your favorite influencer visited is located? Simply Circle to Search1 with Google and start planning your own trip to the Louvre. Then get ready to experience local flavors by calling ahead with Live Translate2 to make a reservation in French, even if all you know is “Bonjour.”
                    Capture every detail of your candlelight meal with impressive Nightography and zoom in to see the live violinist playing across the room. Once you’re back in your hotel, elevate your pics from good to great right on your Samsung Galaxy S24 Ultra. You can even use your built-in S Pen to add fun doodles before',
                'brand' => 'Samsung',
                'price' => 2490,
                'shopping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Iphone 14',
                'details' => ' 32GB 1Tb SSD',
                'decsription' => 'Wondering where the cool museum that your favorite influencer visited is located? Simply Circle to Search1 with Google and start planning your own trip to the Louvre. Then get ready to experience local flavors by calling ahead with Live Translate2 to make a reservation in French, even if all you know is “Bonjour.”
                    Capture every detail of your candlelight meal with impressive Nightography and zoom in to see the live violinist playing across the room. Once you’re back in your hotel, elevate your pics from good to great right on your Samsung Galaxy S24 Ultra. You can even use your built-in S Pen to add fun doodles before',
                'brand' => 'Apple',
                'price' => 2500,
                'shopping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
            [
                'name' => 'Iphone 15',
                'details' => '32Gpu, 32GB 512Gb SSD',
                'decsription' => 'Wondering where the cool museum that your favorite influencer visited is located? Simply Circle to Search1 with Google and start planning your own trip to the Louvre. Then get ready to experience local flavors by calling ahead with Live Translate2 to make a reservation in French, even if all you know is “Bonjour.”
                    Capture every detail of your candlelight meal with impressive Nightography and zoom in to see the live violinist playing across the room. Once you’re back in your hotel, elevate your pics from good to great right on your Samsung Galaxy S24 Ultra. You can even use your built-in S Pen to add fun doodles before',
                'brand' => 'Apple',
                'price' => 3190,
                'shopping_cost' => 25,
                'image_path' => 'storage/product3.png'
            ],
        ];
        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
