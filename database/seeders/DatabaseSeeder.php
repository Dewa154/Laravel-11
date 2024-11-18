<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SellerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}

