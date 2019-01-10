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

Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@user');

Route::get('categories/{category}/products', 'CategoryProductController@show');

// Route::group([
//     'middleware' => 'auth:api'
//   ], function() {
//       Route::get('logout', 'AuthController@logout');
//       Route::get('user', 'AuthController@user');
//   });

