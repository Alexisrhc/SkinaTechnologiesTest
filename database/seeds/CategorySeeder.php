<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
	            'name' 				=> 'hogar',
	            'status' 			=> '1',
	        ],
	        [
	            'name' 				=> 'belleza',
	            'status' 			=> '1',
	        ],
	        [
	            'name' 				=> 'instrumentos musicales',
	            'status' 			=> '1',
	        ],
	        [
	            'name' 				=> 'ropa, zapatos y accesorios',
	            'status' 			=> '1',
	        ],
	        [
	            'name' 				=> 'otra',
	            'status' 			=> '0',
	        ]
        ]);
    }
}
