<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Auth
Route::group(['prefix' => 'auth','namespace' => 'Auth'], function () {
    Route::post('signin' , 'LoginController');
    Route::get('me' , 'MeController');
    Route::post('register', 'RegisterController');
    Route::post('registerindustry', 'RegisterIndustryController');
});

// List
Route::get('qualifications', 'QualificationController@index');
Route::get('users', 'UserController@index');
Route::get('allqualifications', 'QualificationController@allqualifications');
Route::get('categories', 'CategoryController@index');

// List single Item
Route::get('qualification/{id}', 'QualificationController@show');
Route::get('user/{id}', 'UserController@show');

// Create new 
Route::middleware('auth:api')->post('qualification', 'QualificationController@store');
Route::middleware('auth:api')->post('user', 'UserController@store');
Route::middleware('auth:api')->post('useractive', 'UserController@useractive');
Route::middleware('auth:api')->post('userdiactive', 'UserController@userdiactive');
Route::middleware('auth:api')->post('category', 'CategoryController@store');

// Update 
Route::middleware('auth:api')->put('qualification', 'QualificationController@store');
Route::middleware('auth:api')->put('user', 'UserController@store');
Route::middleware('auth:api')->put('updateprofile', 'ProfileController@updateprofile');


// Delete 
Route::middleware('auth:api')->delete('qualification/{id}', 'QualificationController@destroy');
Route::middleware('auth:api')->delete('category/{id}', 'CategoryController@destroy');
