<?php

use Illuminate\Database\Seeder;

class CategorySubCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_sub_category')->insert([
        	[
	            'category_id' 				=> '1',
	            'sub_category_id' 			=> '1',
	        ]
        ]);
    }
}
