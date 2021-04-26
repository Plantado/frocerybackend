<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create([
            "name" => "CocaCola 1.5 liter",
            "price" => 80.00,
            "category" => "drinks",
            "description" => "a cold drink for a hot day",
            "imageUrl" => "https://www.pngjoy.com/fullpng/y7j1u7z9q5t4d6/"
        ]);

        Product::create([
            "name" => "Sprite 1.5 liter",
            "price" => 80.00,
            "category" => "drinks",
            "description" => "a cold drink for a hot day",
            "imageUrl" => "https://ipcdn.freshop.com/resize?url=https://images.freshop.com/1564405684702543772/fdba22ce91f34b3d56a123668f00a862_large.png&width=512&type=webp&quality=40"
        ]);
    }
}
