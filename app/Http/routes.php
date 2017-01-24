<?php

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', [ 'as' => 'post.contact', 'uses' => 'PagesController@postContact' ] );

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('posts', 'PostsController@index');
Route::get('posts/{category}', 'PostsController@category');
Route::get('post/{slug}', 'PostsController@showBlogBySlug');

Route::group(['middleware' => 'guest'], function(){		/* change guest to auth * 

	/* Put all routes here that require user to be logged in. Otherwise it will redirect to login */

	Route::get('/admin', 'PagesController@adminIndex');
	Route::get('/admin/posts', 'PostsController@indexAdmin');
	Route::get('/admin/posts/create', 'PostsController@create');
	Route::post('/admin/posts/create', ['as' => 'post_create', 'uses' => 'PostsController@store']);

});