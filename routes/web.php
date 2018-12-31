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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/articles', function () {
    return view('pages.articles');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/patreon', function () {
    return view('pages.patreon');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/resources', function () {
    return view('pages.resources');
});
