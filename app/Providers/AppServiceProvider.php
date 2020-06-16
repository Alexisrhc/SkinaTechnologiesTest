<?php

namespace App\Providers;

use App\Observers\ProductObserver;
use App\Observers\SubCategoryObserver;
use App\Product;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductObserver::class);
        SubCategory::observe(SubCategoryObserver::class);
    }
}
