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

Route::get('/', 'Controller@home');
Route::get('/about', 'Controller@about');
Route::get('/services', 'Controller@services');
Route::get('/services/{name}', 'Controller@singleService');
Route::get('/contact', 'Controller@contact');
