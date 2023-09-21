<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'image'=>"product_1.png",
                'name'=>"rest chair",
                'desc'=>fake()->sentence(),
                'price'=>120,
                'stock'=>5,
                "category_id"=>1,
                "user_id"=>1,
            ],
        ]);
    }
}
