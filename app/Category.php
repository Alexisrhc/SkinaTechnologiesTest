<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','status'
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    // public function subCategory()
    // {
    //     return $this->hasManyThrough(SubCategory::class, CategorySubCategory::class);
    // }

    public function subCategory()
    {
        return $this->belongsToMany(SubCategory::class);
    }

    public function productSubCategories()
    {
        return $this->hasManyThrough(
            ProductSubCategory::class,
            SubCategory::class,
            'category_id',
            'sub_category_id',
            'id',
            'id'
        );
    }
}
