<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Électronique', 'description' => 'Produits électroniques et gadgets'],
            ['name' => 'Vêtements', 'description' => 'Mode et vêtements'],
            ['name' => 'Maison', 'description' => 'Produits pour la maison'],
        ]);
    }
}

