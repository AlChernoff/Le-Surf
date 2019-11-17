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

#CMS


Route::middleware(['cmsguard'])->group(function(){
    Route::prefix('cms')->group(function(){
        Route::get('dashboard','CmsController@dashboard');
        Route::resource('menu','MenuController');
    });
});

#SHOP
Route::prefix('shop')->group(function(){
    Route::get('/','ShopController@categories');
    Route::get('add-to-cart','ShopController@ajaxAddToCart');
    Route::get('order-now','ShopController@orderNow');
    Route::get('cart','ShopController@cart');
    Route::get('clear-cart','ShopController@clearCart');
    Route::get('remove-item/{product_id}','ShopController@removeItem');
    Route::get('update-cart/{operation}/{product_id}','ShopController@updateItem');
    Route::get('{category}','ShopController@products')->name('category.show');
    Route::get('{category}/{purl}','ShopController@item');
});

#USER
Route::prefix('user')->group(function(){
    Route::get('logout','UserController@logout');
    Route::get('signin','UserController@getSignin');
    Route::post('signin','UserController@postSignin');
    Route::get('signup','UserController@getSignup');
    Route::post('signup','UserController@postSignup');
});

#OTHERS
Route::get('/', 'PagesController@home');
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('search/{query}', 'ShopController@getSearch');
Route::get('{url}','PagesController@content');


