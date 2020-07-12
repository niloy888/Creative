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

/*Route::get('/', function () {
    return view('welcome');
});*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//client side
Route::get('/','Client\ClientController@index')->name('/');


Route::get('/client-login', 'Client\CheckoutController@login')->name('client-login');
Route::post('/login-process', 'Client\CheckoutController@loginProcess')->name('login-process');
Route::get('/client-register', 'Client\CheckoutController@register')->name('client-register');
Route::post('/registration-process', 'Client\CheckoutController@registerProcess')->name('registration-process');
Route::get('/client-logout', 'Client\CheckoutController@logout')->name('client-logout');

Route::get('/category/{id}', 'Client\ClientController@category')->name('category-products');
Route::get('/sub-category/{id}', 'Client\ClientController@subCategory')->name('sub-category');
Route::get('/product/details/{id}/{category_id}', 'Client\ClientController@productDetails')->name('product');
Route::post('/product-review','Client\ClientController@productReview')->name('product-review');
Route::get('/brand/products/{id}', 'Client\ClientController@brandProducts')->name('brand-product');


//admin side
//category
Route::get('/add-category', 'Admin\Category\CategoryController@add_category')->name('add-category');
Route::post('/save-category', 'Admin\Category\CategoryController@save_category')->name('save-category');
Route::get('/manage-category', 'Admin\Category\CategoryController@manage_category')->name('manage-category');
Route::get('/details-category/{id}', 'Admin\Category\CategoryController@details_category')->name('details-category');
Route::get('/edit-category/{id}', 'Admin\Category\CategoryController@edit_category')->name('edit-category');
Route::post('/update-category', 'Admin\Category\CategoryController@update_category')->name('update-category');

// for subcategory ----------
Route::get('/manage-subcategory/{id}', 'Admin\Category\CategoryController@manage_subcategory')->name('manage-subcategory');
Route::get('/add-subcategory/{id}', 'Admin\Category\CategoryController@add_subcategory')->name('add-subcategory');
Route::post('/save-subcategory', 'Admin\Category\CategoryController@save_subcategory')->name('save-subcategory');
Route::get('/details-subcategory/{id}', 'Admin\Category\CategoryController@details_subcategory')->name('details-subcategory');
Route::get('/edit-subcategory/{id}', 'Admin\Category\CategoryController@edit_subcategory')->name('edit-subcategory');
Route::post('/update-subcategory', 'Admin\Category\CategoryController@update_subcategory')->name('update-subcategory');
