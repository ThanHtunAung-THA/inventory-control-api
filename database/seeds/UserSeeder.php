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
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30002,
                'name' => 'thantunaung',
                'email' => 'thantunaung@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30003,
                'name' => 'mgmgyoeyar',
                'email' => 'mgmgyoeyar@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30004,
                'name' => 'yaminnyinyi',
                'email' => 'yaminnyinyi@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30005,
                'name' => 'poepoe',
                'email' => 'poepoe@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30006,
                'name' => 'thormas',
                'email' => 'thormas@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30007,
                'name' => 'henderson',
                'email' => 'henderson@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30008,
                'name' => 'mrs.james',
                'email' => 'mrs.james@gmail.com',
                // 'password' => Hash::make('12345'), // It's better to hash passwords
                'password' => '12345', // It's better to hash passwords
                'phone' => '09123456789',
                'date_of_birth' => '1990-11-1',
            ],
            [
                'user_code' => 30009,
                'name' => 'mr.john',
                'email' => 'mr.john@gmail.com',
                // 'password' => Hash::make('12345'), // Hashing the password
                'password' => '12345', // Hashing the password
                'phone' => '09123456780',
                'date_of_birth' => '1990-12-2',
            ]
        ]);
    }
}
