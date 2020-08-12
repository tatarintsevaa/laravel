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

Route::get('/admin', 'Admin\IndexController@index')->name('admin.index');

Route::get('/', 'IndexController@index')->name('home');

Route::get('/news/', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@show')->name('newsOne');
//Route::get('/news', 'IndexController@index');




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
