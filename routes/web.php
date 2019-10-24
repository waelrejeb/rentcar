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

Route::get('/','PagesController@index')->name('addVoiture');
Route::get('/administration','AdminController@home')->name('administration');
Route::post('/add_voiture', 'AdminController@postAddVoiture')->name('add_voiture');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
