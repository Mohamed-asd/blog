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

<<<<<<< HEAD
Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about')->name('PageAbout');

Route::get('/contact', 'PageController@contact');
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 5775baf0e4e20e675acb4b59fd9aa2abcddc9ee9
