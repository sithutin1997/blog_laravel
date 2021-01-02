<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index')->name('article');
Route::get('/articles/detail/{id}', 'ArticleController@detail');
Route::get('/articles/add','ArticleController@add');
Route::post('/articles/add','ArticleController@create');
Route::get('/articels/delete/{id}','ArticleController@delete');