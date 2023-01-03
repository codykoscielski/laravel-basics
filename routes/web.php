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
    return '<h1>Home Page</h1><a href="/about">View about</a>';
});

//Basics of routes
Route::get('/about', function() {
    //We would not do a view like this in a real project
    return '<h1>About page</h1><a href="/">Back to home</a>';
});