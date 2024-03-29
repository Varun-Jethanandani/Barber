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
// Route::get('/login','WebUserController@login');
// Route::get('/dashboard','WebUserController@dashboard');

Auth::routes();
Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::resource('/services' , 'Services');
Route::resource('/packages' , 'Packages');
Route::resource('/customer' , 'Customer');
Auth::routes();
Route::get('/home','HomeController@index');

