<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'role_id' => 0,
            'password' => Hash::make('test'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
