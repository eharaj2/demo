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

Route::get('', function(){
	return redirect()->to(App::getLocale());
});





Route::group(['prefix' => "{locale}",'where' => ['locale' => '[a-zA-Z]{2}'], ], function(){
		Route::get('', "Frontend\HomeController@index")->name('frontend.home');
	Route::get("", function(){
		return redirect()->to(App::getLocale()."/". session()->get('region'));
	});
	Route::group(['prefix' => "{region}"], function(){
		Route::get('', "Frontend\HomeController@index")->name('frontend.home');

		Route::get('/lang', 'Controller@lang')->name('lang.change');
		Route::get('/region', 'Controller@region')->name('region.change');

	});


});
