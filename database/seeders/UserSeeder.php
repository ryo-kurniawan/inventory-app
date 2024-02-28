<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert admin level
        $adminLevelId = DB::table('levels')->insertGetId([
            'level' => 'admin',
            'created_at' => now(),
        ]);

        // Insert operator level
        $operatorLevelId = DB::table('levels')->insertGetId([
            'level' => 'operator',
            'created_at' => now(),
        ]); 
    
        // Insert user with admin level
        DB::table('users')->insert([
            'full_name' => 'Ryo Kurniawan',
            'email' => 'ryo@mail.com',
            'password' => Hash::make('ryo12345'),
            'level_id' => $adminLevelId,
            'created_at' => now(),
        ]);

        // Insert user with operator level
        DB::table('users')->insert([
            'full_name' => 'Ahmad Dahlan',
            'email' => 'ahmad@mail.com',
            'password' => Hash::make('ahmad123'),
            'level_id' => $operatorLevelId,
            'created_at' => now(),
        ]);

    }
}
