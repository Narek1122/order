<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'product_name' => 'nike',
                'weight' => 3,
                'decription' => 'Hello World',
                'total_price' => 3,
                'created_at' => '2022-10-10',
                'updated_at' => '2022-10-10'
            ],

            [
                'product_name' => 'adidas',
                'weight' => 4,
                'decription' => 'Hello World',
                'total_price' => 4,
                'created_at' => '2022-09-10',
                'updated_at' => '2022-09-10'
            ],

            [
                'product_name' => 'reebok',
                'weight' => 4,
                'decription' => 'Hello World',
                'total_price' => 5,
                'created_at' => '2022-08-10',
                'updated_at' => '2022-08-10'
            ],
        ];

        Order::insert($orders);
    }
}
