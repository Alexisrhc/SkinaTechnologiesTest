<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
         //    CategorySeeder::class,
         //    SubCategorySeeder::class,
	        // ProductSeeder::class,
         //    ProductSubcategory::class,
         //    CategorySubCategory::class
	    ]);
    }
}
