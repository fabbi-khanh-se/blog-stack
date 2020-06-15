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

Auth::routes();
Route::get('/', 'PostController@index')->name('posts.home');
Route::group(['prefix' => 'questions'], function () {
    Route::get('/create', 'PostController@create')->name('posts.create')->middleware('auth');;
    Route::post('/', 'PostController@store')->name('posts.store')->middleware('auth');;
    Route::get('/{id}', 'PostController@show')->name('posts.show');
});

Route::group(['prefix' => 'comment'], function () {
    Route::post('/', 'CommentController@store')->name('comments.store')->middleware('auth');;
});
Route::get('/logout', 'PostController@logout')->name('user.logout');