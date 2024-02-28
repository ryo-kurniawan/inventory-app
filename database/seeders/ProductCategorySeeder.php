<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('product_categories')->insert([
            'category_name' => 'PC & Laptop',
            'created_at' => now(),
        ]);

        DB::table('product_categories')->insert([
            'category_name' => 'Monitor',
            'created_at' => now(),
        ]);

        DB::table('product_categories')->insert([
            'category_name' => 'Keyboard',
            'created_at' => now(),
        ]);
        

    }
}
