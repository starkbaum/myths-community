<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


# Settings

Route::get('/settings', 'UsersController@settings')->middleware('auth');
Route::post('/avatar', 'UsersController@storeAvatar');

# User

Route::get('/user', 'UsersController@index');

# Admin

Route::get('/admin', 'AdminController@index');
Route::get('/admin/roles', 'RolesController@index');

Route::post('/admin/roles', 'RolesController@store');