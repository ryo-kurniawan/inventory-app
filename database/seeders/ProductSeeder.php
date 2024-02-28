<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            'product_name' => 'Asus ROG Strix',
            'description' => 'Description of Asus ROG Strix',
            'price' => 17000000,
            'stock' => 50,
            'created_at' => now(),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Acer Nitro 5',
            'description' => 'Description of Acer Nitro 5',
            'price' => 15000000,
            'stock' => 30,
            'created_at' => now(),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Lenovo Legion 5',
            'description' => 'Description of Lenovo Legion 5',
            'price' => 23000000,
            'stock' => 20,
            'created_at' => now(),
        ]);
    }
}
