<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::group(['prefix' => 'auth','namespace' => 'Auth'], function () {
    Route::get('signout' , 'SignOutController@redirect');
});



// Auth::routes();

Route::get('/login', 'Auth\LoginController@index');
Route::get('/register', 'Auth\RegisterController@index');
Route::get('/industry', 'Auth\RegisterController@industry');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/users', 'UserController@users');
// Route::get('/qualifications', 'QualificationController@qualifications');

Route::get('qualifications', function()
{
    return response()->view('qualification');
});

Route::get('addqualifications', function()
{
    return response()->view('addqualification');
});

Route::get('/profile', 'ProfileController@index');
Route::get('/category', 'CategoryController@category');
