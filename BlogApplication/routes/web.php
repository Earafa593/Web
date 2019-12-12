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
//home page
Route::get('/about','PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
//blog
Route::get('blog','BlogController@getIndex')->name('blog.index');
Route::get('blog/{post_id}','BlogController@getSinglePost')->name('blog.single');

//posts

Route::get('posts','PostController@index')->name('posts.index');
Route::get('posts/create','PostController@create')->name('posts.create')->middleware('auth');
Route::post('posts','PostController@store')->name('posts.store')->middleware('auth');
Route::get('posts/{id}','PostController@show')->name('posts.show');
Route::get('posts/{id}/edit','PostController@edit')->name('posts.edit')->middleware('auth');
Route::put('posts/{id}','PostController@update')->name('posts.update')->middleware('auth');
Route::delete('post/{id}','PostController@destroy')->name('posts.destroy')->middleware('auth');

//Categories
Route::get('categories','CategoryController@index')->name('categories.index')->middleware('auth');
Route::post('categories','CategoryController@store')->name('categories.store')->middleware('auth');
Route::get('categories/{id}','CategoryController@show')->name('categories.show');
Route::get('categories/{id}/edit','CategoryController@edit')->name('categories.edit')->middleware('auth');
Route::put('categories/{id}','CategoryController@update')->name('categories.update')->middleware('auth');
Route::delete('categories/{id}','CategoryController@destroy')->name('categories.destroy')->middleware('auth');
//Tags
Route::get('tags','TagController@index')->name('tags.index');
Route::post('tags','TagController@store')->name('tags.store')->middleware('auth');
Route::get('tags/{id}','TagController@show')->name('tags.show');
Route::get('tags/{id}/edit','TagController@edit')->name('tags.edit')->middleware('auth');
Route::put('tags/{id}','TagController@update')->name('tags.update')->middleware('auth');
Route::delete('tag/{id}','TagController@destroy')->name('tags.destroy')->middleware('auth');

//Comments
Route::post('comments/{post_id}','CommentController@store')->name('comments.store')->middleware('auth');
//profile

Route::get('/profile','ProfileController@create')->name('profile.create');
Route::get('profile/{id}','ProfileController@show')->name('profile.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
