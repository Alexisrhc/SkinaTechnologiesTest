<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorySubCategory extends Pivot
{
	use SoftDeletes;

	// protected $table = 'category_sub_category';

	public function CategoriesSubCategory()
    {
    	return $this->hasOne(CategorySubCategory::class);
    }
}
