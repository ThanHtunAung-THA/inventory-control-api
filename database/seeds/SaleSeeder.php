<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([

            [
                'user_code' => '20001',
                'date' => Carbon::now()->subDays(10), // 10 days ago
                'location' => 'Yangon',
                'item_id' => 'ITEM001',
                'customer' => 'Mr. Aung',
                'payment_type' => 'Credit Card',
                'currency' => 'Kyats',
                'quantity' => 5,
                'discount_and_foc' => 0,
                'paid' => 50000,
                'total' => 50000,
                'balance' => 0,
            ],
            [
                'user_code' => '30001',
                'date' => Carbon::now()->subDays(15), // 15 days ago
                'location' => 'Yangon',
                'item_id' => 'ITEM005',
                'customer' => 'Mr. Zaw',
                'payment_type' => 'Credit Card',
                'currency' => 'Kyats',
                'quantity' => 2,
                'discount_and_foc' => 0,
                'paid' => 20000,
                'total' => 20000,
                'balance' => 0,
            ],
            [
                'user_code' => '30002',
                'date' => Carbon::now()->subDays(12), // 12 days ago
                'location' => 'Mandalay',
                'item_id' => 'ITEM006',
                'customer' => 'Ms. Hla',
                'payment_type' => 'Bank Transfer',
                'currency' => 'Kyats',
                'quantity' => 4,
                'discount_and_foc' => 200,
                'paid' => 38000,
                'total' => 40000,
                'balance' => 200,
            ],
            [
                'user_code' => '30003',
                'date' => Carbon::now()->subDays(8), // 8 days ago
                'location' => 'Naypyidaw',
                'item_id' => 'ITEM007',
                'customer' => 'Mr. Min',
                'payment_type' => 'COD',
                'currency' => 'Kyats',
                'quantity' => 7,
                'discount_and_foc' => 500,
                'paid' => 34500,
                'total' => 35000,
                'balance' => 500,
            ],
            [
                'user_code' => '20002',
                'date' => Carbon::now()->subDays(5), // 5 days ago
                'location' => 'Mandalay',
                'item_id' => 'ITEM002',
                'customer' => 'Ms. Su',
                'payment_type' => 'Bank Transfer',
                'currency' => 'Kyats',
                'quantity' => 3,
                'discount_and_foc' => 500,
                'paid' => 29500,
                'total' => 30000,
                'balance' => 500,
            ],
            [
                'user_code' => '30004',
                'date' => Carbon::now()->subDays(6), // 6 days ago
                'location' => 'Bago',
                'item_id' => 'ITEM008',
                'customer' => 'Ms. Khin',
                'payment_type' => 'Cash',
                'currency' => 'Kyats',
                'quantity' => 3,
                'discount_and_foc' => 0,
                'paid' => 30000,
                'total' => 30000,
                'balance' => 0,
            ],
            [
                'user_code' => '30005',
                'date' => Carbon::now()->subDays(4), // 4 days ago
                'location' => 'Yangon',
                'item_id' => 'ITEM009',
                'customer' => 'Mr. Htun',
                'payment_type' => 'Credit Card',
                'currency' => 'Kyats',
                'quantity' => 1,
                'discount_and_foc' => 0,
                'paid' => 15000,
                'total' => 15000,
                'balance' => 0,
            ],
            [
                'user_code' => '30006',
                'date' => Carbon::now()->subDays(3), // 3 days ago
                'location' => 'Mandalay',
                'item_id' => 'ITEM010',
                'customer' => 'Ms. Nwe',
                'payment_type' => 'Bank Transfer',
                'currency' => 'Kyats',
                'quantity' => 5,
                'discount_and_foc' => 1000,
                'paid' => 49000,
                'total' => 50000,
                'balance' => 1000,
            ],
            [
                'user_code' => '20003',
                'date' => Carbon::now()->subDays(2), // 2 days ago
                'location' => 'Naypyidaw',
                'item_id' => 'ITEM003',
                'customer' => 'Mr. Ko',
                'payment_type' => 'COD',
                'currency' => 'Kyats',
                'quantity' => 10,
                'discount_and_foc' => 1000,
                'paid' => 49000,
                'total' => 50000,
                'balance' => 1000,
            ],
            [
                'user_code' => '30007',
                'date' => Carbon::now()->subDays(2), // 2 days ago
                'location' => 'Naypyidaw',
                'item_id' => 'ITEM011',
                'customer' => 'Mr. Aye',
                'payment_type' => 'COD',
                'currency' => 'Kyats',
                'quantity' => 8,
                'discount_and_foc' => 0,
                'paid' => 80000,
                'total' => 80000,
                'balance' => 0,
            ],
            [
                'user_code' => '30008',
                'date' => Carbon::now()->subDays(1), // 1 day ago
                'location' => 'Bago',
                'item_id' => 'ITEM012',
                'customer' => 'Ms. Mya',
                'payment_type' => 'Cash',
                'currency' => 'Kyats',
                'quantity' => 2,
                'discount_and_foc' => 0,
                'paid' => 20000,
                'total' => 20000,
                'balance' => 0,
            ],
            [
                'user_code' => '20004',
                'date' => Carbon::now()->subDays(1), // 1 day ago
                'location' => 'Bago',
                'item_id' => 'ITEM004',
                'customer' => 'Ms. Nanda',
                'payment_type' => 'Cash',
                'currency' => 'Kyats',
                'quantity' => 1,
                'discount_and_foc' => 0,
                'paid' => 15000,
                'total' => 15000,
                'balance' => 0,
            ],
            [
                'user_code' => '30009',
                'date' => Carbon::now(), // today
                'location' => 'Yangon',
                'item_id' => 'ITEM013',
                'customer' => 'Mr. Zaw',
                'payment_type' => 'Credit Card',
                'currency' => 'Kyats',
                'quantity' => 4,
                'discount_and_foc' => 0,
                'paid' => 40000,
                'total' => 40000,
                'balance' => 0,
            ],


        ]);
        
    }
}