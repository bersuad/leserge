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

Route::get('/', 'PagesController@index' );

Route::get('/profilePage', 'PagesController@profilePage');

Route::get('/user_register', 'Auth\RegisterController@test');

Route::get('/singleVendorView', 'PagesController@singleVendorView');

Route::get('/vendorList', 'PagesController@singleVendorView');

Route::get('/listType/{type}', 'listType@index')->name('listType');

Route::get('/listTypeProfile/{type}', 'listType@view')->name('listTypeProfile');

Route::post('profile_update', 'profileController@update');

Route::post('change_update', 'profileController@updateName');

Route::post('messages', 'messagesController@messages');

Route::get('/user-message', 'messagesController@index');

Route::get('/search', 'searchController@index');

Route::post('add_comment', 'commentController@store');

// Route::post('/like','postsController@likePost');

Route::post('/like', 'LikeController@toggleLike')->name('toggleLike');


//routing the resource

Route::resource('', 'indexPost');
Route::resource('listType', 'listType');
Route::resource('listTypeProfile', 'listType');
Route::resource('user-profile', 'profileProfileController');
Route::resource('posts', 'postsController');
Route::resource('profile', 'profileController');
Route::resource('user-message', 'messagesController');


Auth::routes();

Route::get('/profile', 'profileController@index');
