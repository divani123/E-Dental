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
    return view('Welcome');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/login', function () {
    return view('dashboard.login');
});

Route::get('/dashboard/register', function () {
    return view('dashboard.register');
});

Route::get('/dashboard/404', function () {
    return view('dashboard.404');
});

Route::get('/dashboard/blank', function () {
    return view('dashboard.blank');
});

Route::get('/dashboard/buttons', function () {
    return view('dashboard.buttons');
});

Route::get('/dashboard/cards', function () {
    return view('dashboard.cards');
});

Route::get('/dashboard/charts', function () {
    return view('dashboard.charts');
});

Route::get('/dashboard/forgot-password', function () {
    return view('dashboard.forgot-password');
});

Route::get('/dashboard/tables', function () {
    return view('dashboard.tables');
});

Route::get('/dashboard/utilities-animation', function () {
    return view('dashboard.utilities-animation');
});

Route::get('/dashboard/utilities-border', function () {
    return view('dashboard.utilities-border');
});

Route::get('/dashboard/utilities-color', function () {
    return view('dashboard.utilities-color');
});

Route::get('/dashboard/utilities-other', function () {
    return view('dashboard.utilities-other');
});





