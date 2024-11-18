<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Product One', 'price' => 100.00, 'seller_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Two', 'price' => 200.00, 'seller_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Three', 'price' => 150.00, 'seller_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Four', 'price' => 300.00, 'seller_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Five', 'price' => 250.00, 'seller_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
