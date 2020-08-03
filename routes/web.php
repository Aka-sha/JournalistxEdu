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
    return view('index');
});

Route::get('about','AboutController@index');
Route::get('students','StudentsController@index');
Route::get('journalists','JournalistsController@index');
Route::get('publishedworks','PublishedworksController@index');


Route::get('/about', 'AboutController@showAbout')->name('about');

Auth::routes();

Route::get('/home', 'ProfilesController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
