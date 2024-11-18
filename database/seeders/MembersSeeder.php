<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'address' => Str::random(10),
            'phone' => $this->generateRandomPhoneNumber(),
        ]);
    }

    /**
     * Generate a random 10-digit phone number.
     */
    private function generateRandomPhoneNumber(): string
    {
        return '9' . rand(100000000, 999999999); // Example for a 10-digit number starting with 9
    }
}