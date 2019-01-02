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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/articles', 'HomeController@articles')->name('articles');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/patreon', 'HomeController@patreon')->name('patreon');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/resources', 'HomeController@resources')->name('resources');
