<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//List all articles 
Route::get('users','UsersController@index');

// // List single article
Route::get('user/{id}','UsersController@show');

// // Create new article
Route::post('user','UsersController@store');

// // Update article
Route::put('user','UsersController@store');

// // Delete article
Route::delete('user/{id}','UsersController@destroy');

Route::post('login','UsersController@details');
