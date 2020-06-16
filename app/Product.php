<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','sub_category_id'
    ];

    public function subCategories()
    {
    	return $this->belongsToMany(SubCategory::class);
    }
/*
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }*/
}