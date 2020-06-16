<?php

use Illuminate\Database\Seeder;

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
	            'name' => 'alexis hernandez',
	            'email' => 'alexisrhc@gmail.com',
	            'role' => 'admin',
	            'status' => '1',
	            'password' => Hash::make('secret')
	        ],
	        [
	            'name' => 'carlos hernandez',
	            'email' => 'carlos@gmail.com',
	            'role' => 'basic',
	            'status' => '1',
	            'password' => Hash::make('secret')
	        ]
        ]);
    }
}
