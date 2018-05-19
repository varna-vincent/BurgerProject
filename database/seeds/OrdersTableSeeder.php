<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
          	'user_id' => '1',
            'status' => 'Cart'
        ]);

        // One customer can place multiple orders
        DB::table('orders')->insert([
          	'user_id' => '2',
            'status' => 'Cart'
        ]);

		    DB::table('orders')->insert([
          	'user_id' => '2',
            'status' => 'Ordered'
        ]);

        DB::table('order_products')->insert([
            'product_id' => '6',
            'order_id' => '1',
            'name' => 'Bacon Cheese Burger',
            'quantity' => '2',
            'price' => '12.99'
        ]);

        DB::table('order_products')->insert([
            'product_id' => '5',
            'order_id' => '1',
            'name' => 'Cheese Burger',
            'quantity' => '2',
            'price' => '12.97'
        ]);

        DB::table('order_products')->insert([
        	'product_id' => '3',
        	'order_id' => '2',
          'name' => 'Cheese Burger',
          'quantity' => '1',
          'price' => '12.97'
        ]);
    }
}
