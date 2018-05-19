<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('MyPassword1!'),
            'role' => 'admin',
            'phone' => '1234567890'
        ]);

        DB::table('users')->insert([
            'name' => 'Varna Vincent',
            'email' => 'vvincent@gmail.com',
            'password' => bcrypt('MyPassword1!'),
            'role' => 'user',
            'phone' => '1234567890'
        ]);
    }
}