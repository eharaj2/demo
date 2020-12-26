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

Route::get('/','Admin\Auth\AdminAuthController@showLoginForm');
Route::get('/login','Admin\Auth\AdminAuthController@showLoginForm')->name('login');
Route::post('/login', 'Admin\Auth\AdminAuthController@login');
Route::get('/logout', 'Admin\Auth\AdminAuthController@logout');
Route::post('/logout', 'Admin\Auth\AdminAuthController@logout');
// Route::get('/login', function () {
//     return view('admin.auth.login');
// });
Route::group(['middleware' => 'auth:admin'], function(){
	Route::get('/dashboard', "Admin\DashboardController@showDashboard")->name('admin.dashboard');
	Route::get('/add-product', "Admin\Product\ProductController@addProduct")->name('admin.add-product');
	Route::post('/add-product-save', "Admin\Product\ProductController@add")->name('admin.add-product-save');
	Route::get('/product-list', "Admin\Product\ProductController@index")->name('admin.product-list');

	

});

