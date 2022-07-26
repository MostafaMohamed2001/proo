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

Route::get('/', function () {return Redirect()->intended("/main");});



Route::get('main','UserController@show')->middleware('CheckUser')->name('THE_HOME');

Route::get('register/user','UserController@RegisterView')->name('register_user');
Route::get('login/user','UserController@LoginView')->name('login_user');


Route::post('Save','UserController@register')->name('Save.register.User');
Route::post('Saved','UserController@login')->name('Save.login.User');
