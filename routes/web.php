<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\PostsController;

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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/data', [HomeController::class, 'index'])->name('data');
Route::get('/notice', [HomeController::class, 'index'])->name('notice');

// Route::get('/', 'HomeController@index');
// Route::get('/data', 'HomeController@data');
// Route::get('/notice', 'HomeController@notice');

//Posts endPoint
Route::get('/posts', [ PostsController::class, 'index']);