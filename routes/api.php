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
    // Route::post('signout' , 'SignOutController');
    // Route::get('me' , 'MeController');
});

// List
Route::get('qualifications', 'QualificationController@index');
Route::get('allqualifications', 'QualificationController@allqualifications');
Route::get('categories', 'CategoryController@index');

// List single Item
Route::get('qualification/{id}', 'QualificationController@show');

// Create new 
Route::post('qualification', 'QualificationController@store');
Route::post('category', 'CategoryController@store');

// Update 
Route::put('qualification', 'QualificationController@store');

// Delete 
Route::delete('qualification/{id}', 'QualificationController@destroy');
Route::delete('category/{id}', 'CategoryController@destroy');
