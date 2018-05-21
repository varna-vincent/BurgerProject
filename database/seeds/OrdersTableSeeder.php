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

        DB::table('orders')->insert([
            'user_id' => '3',
            'status' => 'Ordered'
        ]);

        DB::table('order_products')->insert([
            'product_id' => '2',
            'order_id' => '1',
            'name' => 'Chicken Burger',
            'quantity' => '2',
            'price' => '12.99'
        ]);

        DB::table('order_products')->insert([
            'product_id' => '5',
            'order_id' => '1',
            'name' => 'Cheesy Beefy Hamburger',
            'quantity' => '2',
            'price' => '12.97'
        ]);

        DB::table('order_products')->insert([
        	'product_id' => '3',
        	'order_id' => '2',
          'name' => 'Turkey Burger',
          'quantity' => '1',
          'price' => '12.97'
        ]);

        DB::table('order_products')->insert([
          'product_id' => '1',
          'order_id' => '3',
          'name' => 'Double Cheese Veggie Burger',
          'quantity' => '1',
          'price' => '12.97'
        ]);

        DB::table('order_products')->insert([
          'product_id' => '4',
          'order_id' => '4',
          'name' => 'Cheese Burger',
          'quantity' => '2',
          'price' => '5.00'
        ]);
    }
}
