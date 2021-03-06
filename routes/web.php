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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/users', 'UsersController');
Route::get('/user-avatar/{id}/{size}','ImagesController@user_avatar');Route::get('/search', 'SearchController@users');
Route::resource('/freinds', 'FriendsController', ['except' => ['create', 'edit','show']]);
