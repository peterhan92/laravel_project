<?php

Route::group(['middleware' => 'web'], function () {
	# obtained through make:auth
    Route::auth();
    Route::get('/home', 'HomeController@index');

    # main page
    Route::get('/', function () {
    	return view('/welcome');
	});

    # contact page
	Route::get('contact', 'PagesController@contact');

	# about page
	Route::get('about', 'PagesController@about');

	# collection of post routes
	Route::resource('posts', 'PostsController');

});
