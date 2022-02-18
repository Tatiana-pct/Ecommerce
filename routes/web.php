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

//Main page
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/single-product{product}', 'ShopController@show')->name('shop.show');

//cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

//checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@success')->name('checkout.success');

//orders
Route::get('/orders', 'HomeController@orders')->name('orders');



