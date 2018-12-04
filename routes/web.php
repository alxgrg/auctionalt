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

Route::get('/services', 'PagesController@estates');
Route::get('/services/estates', 'PagesController@estates');
Route::get('/services/appraisals', 'PagesController@appraisals');
Route::get('/services/sell', 'PagesController@sell');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::post('/contact', 'ContactController@store');