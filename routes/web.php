<?php

// use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'HomeController@users')->name('users.index');
Route::get('/users/create', 'HomeController@create')->name('users.create');
Route::get('/users/{id}', 'HomeController@show')->name('users.show');
Route::get('/users/{id}/edit', 'HomeController@edit')->name('users.edit');
Route::put('/users', 'HomeController@update')->name('users.update');
Route::post('/users', 'HomeController@store')->name('users.store');
Route::delete('/users/{id}', 'HomeController@destroy')->name('users.destroy');


Route::resource('/categories', 'CategoryController');
Route::resource('/subcategories', 'SubCategoryController');
Route::resource('/products', 'ProductController');

Route::get('/test', function(){
	$test = App\SubCategory::findOrFail(3)->Category;
	// \Log::info($test);
	return $test;
});