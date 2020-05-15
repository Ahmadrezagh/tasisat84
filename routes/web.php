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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
//|||||||||||||||||||||||||||||||||||||||||||||||||||
//                       ||       Web Routes       ||
//|||||||||||||||||||||||||||||||||||||||||||||||||||
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
//|||||||||||||||||||||||||||||||||||||||||||||||||||
//||||||||||||||||||||||||       Auth Routes       ||
//|||||||||||||||||||||||||||||||||||||||||||||||||||
if(Auth::check()){
    Route::get('/panel', 'HomeController@index')->name('home');
}else{
    Route::get('/panel','Auth\LoginController@showLoginForm')->name('login');
}
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');    
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
//||||||||||||||||||||||||            Panel            ||
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get('/home', 'panel\HomeController@index')->name('home');
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
//||||||||||||||||||||||||            Admin Panel            ||
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::group(['prefix' => 'admin',], function () {
    Route::get('projects', 'Panel\Admin\ProjectsController@index');
    Route::get('projects/edit/{id}', 'Panel\Admin\ProjectsController@show_edit');
    Route::post('projects/edit/{id}', 'Panel\Admin\ProjectsController@edit');
    Route::get('projects/add', 'Panel\Admin\ProjectsController@show_add');
    Route::post('projects/add', 'Panel\Admin\ProjectsController@store');
    Route::get('projects/delete/{id}','Panel\Admin\ProjectsController@destroy');

    Route::get('services', 'Panel\Admin\ServicesController@index');
    Route::get('services/edit/{id}', 'Panel\Admin\ServicesController@show_edit');
    Route::post('services/edit/{id}', 'Panel\Admin\ServicesController@edit');
    Route::get('services/add', 'Panel\Admin\ServicesController@show_add');
    Route::post('services/add', 'Panel\Admin\ServicesController@store');
    Route::get('services/delete/{id}','Panel\Admin\ServicesController@destroy');

    Route::get('q&a', 'Panel\Admin\QAController@index');
    Route::get('questions/edit/{id}', 'Panel\Admin\QAController@show_edit');
    Route::post('questions/edit/{id}', 'Panel\Admin\QAController@edit');
    Route::get('questions/add', 'Panel\Admin\QAController@show_add');
    Route::post('questions/add', 'Panel\Admin\QAController@store');
    Route::get('questions/delete/{id}','Panel\Admin\QAController@destroy');

    Route::get('users', 'Panel\Admin\UsersController@index');
    Route::get('/users/add','Panel\Admin\UsersController@show_add');
    Route::post('/users/add','Panel\Admin\UsersController@store');
    Route::get('/users/edit/{id}','Panel\Admin\UsersController@show_edit');
    Route::post('/users/edit/{id}','Panel\Admin\UsersController@edit');

    Route::get('financial_department', 'Panel\Admin\ReciptsController@index');
    Route::get('send_sms',  'Panel\Admin\SMSController@index');
    Route::get('settings',  'Panel\Admin\WebsiteSettingController@index');
    Route::post('settings',  'Panel\Admin\WebsiteSettingController@edit');
});
