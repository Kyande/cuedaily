<?php

//landing page
Route::get('/', 'SiteController@landing');

//post specific routes.
Route::get('/home', 'PostsController@index')->name('home');//all posts.

Route::get('/post/create', 'PostsController@create');//call a new post page.
Route::post('/post/create', 'PostsController@store');//save a new post to DB;
Route::get('post/{post}', 'PostsController@show');//show id specific posts.

//user specific routes
Route::get('/registration', 'RegistrationController@create');//call registration page.
Route::post('/registration', 'RegistrationController@store');//register new user.


Route::get('/login', 'SessionsController@create');//call login page
Route::post('/login', 'SessionsController@store');//login user

Route::get('/logout', 'SessionsController@destroy');//destroy user log in session.

//handle tags
Route::get('/tags', 'TagsController@index');//show all tags.

Route::get('/tags/add', 'TagsController@add');//add tag view.
Route::post('/tag/add', 'TagsController@store');//store new tag to DB.

Route::get('/tag/edit/{id}', 'TagsController@edit');//edit tag view.
Route::post('/tag/edit/{id}', 'TagsController@update');//edit tag view.