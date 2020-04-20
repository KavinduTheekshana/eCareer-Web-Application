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
    return view('welcome');
});

// Auth::routes();

Route::get('/login', 'Auth\LoginController@index');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/users', 'UserController@index');
Route::get('/qualifications', 'QualificationController@qualifications');
Route::get('/profile', 'ProfileController@index');
Route::get('/addqualifications', 'QualificationController@addqualifications');
Route::get('/category', 'CategoryController@category');
