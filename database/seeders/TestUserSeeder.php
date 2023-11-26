<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Hash;


class TestUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
	'id'=>'100000',
            'name' => "LabsTester_01",
            'email' => "tester_01@kleeblatt.games",
            'password' => Hash::make('LabsTester_01_pwd'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
DB::table('users')->insert([
	    'id'=>'100001',
            'name' => "LabsTester_02",
            'email' => "tester_02@kleeblatt.games",
            'password' => Hash::make('LabsTester_02_pwd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
DB::table('users')->insert([
'id'=>'100002',
            'name' => "LabsTester_03",
            'email' => "tester_03@kleeblatt.games",
            'password' => Hash::make('LabsTester_03_pwd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
DB::table('users')->insert([
'id'=>'100003',
            'name' => "LabsTester_04",
            'email' => "tester_04@kleeblatt.games",
            'password' => Hash::make('LabsTester_04_pwd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
DB::table('users')->insert([
'id'=>'100004',
            'name' => "LabsTester_05",
            'email' => "tester_05@kleeblatt.games",
            'password' => Hash::make('LabsTester_05_pwd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);



DB::table('users')->insert([
'id'=>'100005',
            'name' => "Klee_Net",
            'email' => "klee_net@kleeblatt.games",
            'password' => Hash::make('test123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

DB::table('users')->insert([
'id'=>'100006',
            'name' => "Tendudu",
            'email' => "tendudu@kleeblatt.games",
            'password' => Hash::make('test123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);







    }
}
