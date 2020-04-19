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
//Index route
Route::get('/', 'IndexController@index');
//Services route
Route::get('/service/{id}','web\ServiceController@show');
Route::get('/services','web\ServiceController@index');
//Projects route
Route::get('/project/{id}','web\ProjectController@show');
Route::get('/projects','web\ProjectController@index');
//Contact us route
Route::get('/contact-us','web\ContactController@index');
Route::post('/contact-us','web\ContactController@store');
//NewsLetters
Route::post('/newsletter','web\NewsletterController@store');
//Search
Route::get('/search','web\SearchController@index');
//About us 
Route::get('/about-us','web\AboutUsController@index');