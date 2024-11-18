<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sellers')->insert([
            ['name' => 'Seller One', 'email' => 'seller1@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seller Two', 'email' => 'seller2@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seller Three', 'email' => 'seller3@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
