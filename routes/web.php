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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/write','CategoryController@index');
Route::post('/posts','ArticleController@store');
Route::post('/comment','CommentController@store');


Route::resource('category', 'CategoryController');
Route::resource('article','ArticleController');

Route::get('/titles', 'ArticleController@index');
Route::get('/titles/{title}', 'ArticleController@show');
Route::post('/titles', 'ArticleController@store2');
