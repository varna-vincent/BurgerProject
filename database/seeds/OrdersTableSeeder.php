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
        //
        DB::table('orders')->insert([
          	'user_id' => '1',
            'status' => 'Active'
        ]);

        DB::table('orders')->insert([
          	'user_id' => '2',
            'status' => 'Cooking'
        ]);


		// One customer can place multiple orders
		  DB::table('orders')->insert([
          	'user_id' => '2',
            'status' => 'Received'
        ]);

        DB::table('order_products')->insert([
        	'product_id' => '3',
          	'order_id' => '2',
            'name' => 'Varna',
            'quantity' => '1',
            'price' => '12.97'

        ]);

        DB::table('order_products')->insert([
          	'product_id' => '6',
          	'order_id' => '1',
            'name' => 'Admin',
            'quantity' => '2',
            'price' => '24.97'
        ]);
      
    }
}
