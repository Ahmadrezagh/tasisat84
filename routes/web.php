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

Route::get('/', 'IndexController@index');
Route::get('/service/{id}','web\ServiceController@show');
Route::get('/services','web\ServiceController@index');

Route::get('/project/{id}','web\ProjectController@show');
Route::get('/projects','web\ProjectController@index');