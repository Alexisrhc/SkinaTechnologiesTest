<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;

	protected $fillable = [
        'name','quantity_products','status','category_id'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function myCategory()
    {
        return $this->belongsToMany(Category::class);
    }
}
