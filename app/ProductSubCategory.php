<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSubCategory extends Pivot
{
	use SoftDeletes;

    // protected $table = 'product_sub_category';

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    // public function subCategory()
    // {
    // 	return $this->belongsTo(SubCategory::class);
    // }
}
