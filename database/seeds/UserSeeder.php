<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user_code' => 30001,
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1-11-1990',
            ],
            [
                'user_code' => 30002,
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                // 'password' => Hash::make('12345'), // Hashing the password
                'password' => '12345', // Hashing the password
                'phone' => '09123456780',
                'date_of_birth' => '2-12-1990',
            ]
        ]);
    }
}