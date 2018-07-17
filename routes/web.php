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
Route::get('/inactive', 'Auth\RegisterController@inactive')->name('inactive');
Route::get('/resend', 'Auth\RegisterController@resendEmail')->name('resendEmail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/{id}', 'UsersController@update')->name('users.edit');
Route::get('/users/{id}/delete', 'UsersController@delete')->name('users.delete');
Route::get('/user/activate/{token}', 'Auth\AuthController@signupActivate');
