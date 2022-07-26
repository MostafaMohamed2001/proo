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
    return view('welcome');
});
Route::get('main','UserController@show')->name('THE_HOME');



Route::get('register/user','UserController@RegisterView');
Route::get('login/user','UserController@LoginView');


Route::post('Save','UserController@register')->name('Save.register.User');
Route::post('Saved','UserController@login')->name('Save.login.User');
