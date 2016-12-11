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

Route::get('/user', 'UsersController@index')->name('user.index');

# Admin

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/roles', 'RolesController@index')->name('admin.roles.index');

Route::post('/admin/roles', 'RolesController@store');

Route::get('/admin/categories', 'CategoriesController@index')->name('admin.categories.index');

Route::post('/admin/categories', 'CategoriesController@store')->name('admin.categories.store');

Route::get('/admin/categroeis/edit/{id}', 'CategoriesController@index')->name('admin.categories.edit');
