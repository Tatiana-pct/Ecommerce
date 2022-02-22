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
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/reset', 'CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/{product}/save', 'CartController@save')->name('cart.save');

//Save wish
Route::delete('/save/{product}', 'SaveController@destroy')->name('save.destroy');
Route::post('/save/{product}/cart', 'SaveController@store')->name('save.store');

//destroy wish

//checkout
Route::get('/checkout', 'checkoutController@checkout')->name('checkout.index');
Route::post('/checkout', 'checkoutController@store')->name('checkout.store');
Route::get('/checkout/success', 'checkoutController@success')->name('checkout.success');

//orders
Route::get('/orders', 'HomeController@orders')->name('orders');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Authentification
Auth::routes();

//Logout
Route::get('/logout', function (){
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');


