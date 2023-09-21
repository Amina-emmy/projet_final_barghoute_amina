<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
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
                'image' => "product_1.png",
                'name' => "rest chair",
                'desc' => fake()->sentence(),
                'price' => 120,
                'stock' => 5,
                "category_id" => 1,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_2.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 4,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()
            ],
            [
                'image' => "product_3.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 12,
                "category_id" => 1,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_4.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 6,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_5.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 6,
                "category_id" => 3,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_6.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 6,
                "category_id" => 3,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_7.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 530,
                'stock' => 3,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_8.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 250,
                'stock' => 5,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_1.png",
                'name' => "rest chair",
                'desc' => fake()->sentence(),
                'price' => 120,
                'stock' => 5,
                "category_id" => 1,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_2.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 4,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_3.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 12,
                "category_id" => 1,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_4.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 6,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_5.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 6,
                "category_id" => 3,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_6.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 150,
                'stock' => 6,
                "category_id" => 3,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_7.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 530,
                'stock' => 3,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_8.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 250,
                'stock' => 5,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_4.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 2,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
            [
                'image' => "product_2.png",
                'name' => "Quartz Belt Watch",
                'desc' => fake()->sentence(),
                'price' => 50,
                'stock' => 1,
                "category_id" => 2,
                "user_id" => 1,
                "created_at" => Carbon::now()

            ],
        ]);
    }
}
