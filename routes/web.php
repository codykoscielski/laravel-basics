<?php

use Illuminate\Support\Facades\Route;

//Import the app controller
use App\Http\Controllers\ExampleController;

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

Route::get('/', [ExampleController::class, "homepage"]);

//Basics of routes
Route::get('/about', [ExampleController::class, "aboutpage"]);