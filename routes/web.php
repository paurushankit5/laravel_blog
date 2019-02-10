<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('/blog_admin',function(){
	return view('admin/dashboard');
});
*/

/*Route::group(['middleware' => ['checkadmin'], 'prefix' => 'phpadmin'], function(){

});*/

/*
Route::group('/blog_admin',function(){
	Route::get('/',function(){
		return view('admin/dashboard');
	});
});*/


Route::group(['middleware' => ['auth','AdminCheck'], 'prefix' => 'blog_admin' ], function(){

	Route::get('/',function(){
		return view('admin/dashboard');
	});

});