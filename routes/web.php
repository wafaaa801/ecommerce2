<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/shop', 'HomeController@shopper')->name('shop');
Route::get('/about', 'HomeController@aboutus')->name('about');
Route::get('/contact', 'HomeController@contactus')->name('contact');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/shop',['uses' => 'ProductController@getProducts','as' => 'shop']);
Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'product.addToCart']);
Route::get('/add-to-cart/', ['uses' => 'ProductController@getCart', 'as' => 'product.shoppingCart']);
Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);
Route::get('/reduce/{id}', ['uses' => 'ProductController@getReduceByOne', 'as' => 'product.reduceByOne']);
Route::get('/add-item/{id}', ['uses' => 'ProductController@getAddItem', 'as' => 'product.addItem']);