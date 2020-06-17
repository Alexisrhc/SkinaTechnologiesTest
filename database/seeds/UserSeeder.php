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
	            'email' => 'alexis@mail.com',
	            'role' => 'admin',
	            'status' => '1',
	            'password' => Hash::make('secret')
	        ],
	        [
	            'name' => 'nombre apellido',
	            'email' => 'nombre@mail.com',
	            'role' => 'basic',
	            'status' => '0',
	            'password' => Hash::make('secret')
	        ]
        ]);
    }
}
