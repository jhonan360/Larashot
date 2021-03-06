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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@obout');
Route::get('/messages/{messages}', 'MessagesController@show');
Route::post('/messages/create', 'MessagesController@create')->middleware('auth');
Auth::routes();

Route::get('/{username}','UserController@show');
Route::get('/{username}/follows','UserController@follows');
Route::post('/{username}/follow','UserController@follow');
Route::post('/{username}/unfollow','UserController@unfollow');
