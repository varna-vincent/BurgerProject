<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	DB::table('products')->insert([

 			'name' => 'Double Cheese Veggie Burger',
            'type' => 'Food',
            'price' => '7.89',
            'description' => 'Super healthy burger including cheese, pesto, garden patty, olives, onions, carrots, bell peppers'        
        ]);

		DB::table('products')->insert([

 			'name' => 'Chicken Burger',
            'type' => 'Food',
            'price' => '10.89',
            'description' => 'Cheese, pesto, Grilled Chicken Breast, olives, onions, carrots, bell peppers'        
        ]);

        DB::table('products')->insert([

 			'name' => 'Turkey Burger',
            'type' => 'Food',
            'price' => '9.89',
            'description' => 'Cheese, pesto, Turkey Patty, Pepperoncini, onions, carrots, bell peppers'        
        ]);

        DB::table('products')->insert([

 			'name' => 'Cheese Burger',
            'type' => 'Food',
            'price' => '5.89',
            'description' => 'Cheese, pesto, Potato Patty, Mayo, Mustard, Onions, bell peppers'        
        ]);
        //
        DB::table('products')->insert([

 			'name' => 'Meat Burger',
            'type' => 'Food',
            'price' => '11.89',
            'description' => 'Cheese, pesto, Meat, Pepperoncini, onions, carrots, bell peppers, Olive Oil, Guacamole, Sliced Ham'        
        ]);
    }
}
