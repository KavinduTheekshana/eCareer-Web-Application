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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// List articles
Route::get('qualifications', 'QualificationController@index');

// List single article
Route::get('qualification/{id}', 'QualificationController@show');

// Create new article
Route::post('qualification', 'QualificationController@store');

// Update article
Route::put('qualification', 'QualificationController@store');

// Delete article
Route::delete('qualification/{id}', 'QualificationController@destroy');
