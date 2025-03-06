<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'description' => 'Un smartphone haut de gamme',
                'price' => 799.99,
                'stock' => 10,
                'image' => 'smartphone.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'T-shirt',
                'description' => 'T-shirt en coton 100%',
                'price' => 19.99,
                'stock' => 50,
                'image' => 'tshirt.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Canapé',
                'description' => 'Canapé confortable 3 places',
                'price' => 499.99,
                'stock' => 5,
                'image' => 'canape.jpg',
                'category_id' => 3
            ]
        ]);
    }
}

