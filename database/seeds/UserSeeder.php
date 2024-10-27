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
            'user_code' => 33333,
            // 'password' => Hash::make(12345),
            'password' => 121212,
            'name' => 'user',
            'email' => 'user@user.com',
            'phone' => '09798174380',
            'date_of_birth' => '1991-07-19',

        ]);
    }
}
