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
            'type' => 'Veg',
            'price' => '7.89',
            'description' => 'Super healthy burger including Pepper Jack cheese, Pesto, Garden patty, olives, Onions, Lettuce, Bell peppers'        
        ]);

		DB::table('products')->insert([

 			'name' => 'Chicken Burger',
            'type' => 'Non-Veg',
            'price' => '10.89',
            'description' => 'Cheese, Pesto, Grilled Chicken Breast, Olives, Onions, Lettuce, Bell peppers'        
        ]);

        DB::table('products')->insert([

 			'name' => 'Turkey Burger',
            'type' => 'Non-Veg',
            'price' => '9.89',
            'description' => 'Cheese, Pesto, Turkey Patty, Pepperoni, Onions, Lettuce, Bell peppers'        
        ]);

        DB::table('products')->insert([

 			'name' => 'Cheese Burger',
            'type' => 'Veg',
            'price' => '5.89',
            'description' => 'Cheese, Pesto, Lettuce, Potato Patty, Mayo, Honey Mustard, Onions, Bell peppers'        
        ]);

        DB::table('products')->insert([

 			'name' => 'Cheesy Beefy Hamburger',
            'type' => 'Non-Veg',
            'price' => '11.89',
            'description' => 'Cheese, Pesto, Lean beef, Pepperoni, onions, Lettuce, Bell peppers, Olive Oil, Guacamole, Sliced Ham'        
        ]);
    }
}
