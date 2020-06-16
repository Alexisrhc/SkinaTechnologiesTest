<?php

use Illuminate\Database\Seeder;

class ProductSubcategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sub_category')->insert([
        	[
	            'product_id' 			=> 1,
	            'sub_category_id' 		=> 1,
	        ],
	        [
	            'product_id' 			=> 1,
	            'sub_category_id' 		=> 2,
	        ],
	        [
	            'product_id' 			=> 1,
	            'sub_category_id' 		=> 3,
	        ],
	        [
	            'product_id' 			=> 2,
	            'sub_category_id' 		=> 1,
	        ]
	    ]);
    }
}
