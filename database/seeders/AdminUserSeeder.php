<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'raj@gmail.com',
            'password' => Hash::make('raj123'), // Hashed password
            'is_admin' => 1, // Ensure you have this column in your users table
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
