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
    $items = [
        '1과',
        '2과',
        '3과'
    ];
    return view('welcome')->withItems($items);
});

Route::get('/data', function(){
    $items = [
        'js',
        'vuejs',
        '<script>alert("test");</script>',
    ];
    return view('data',[
        'items' => $items
    ]);
});
Route::get('/notice', function(){
    $items = [
        'codeigniter',
        'laravel',
        'java'
    ];
    return view('notice')->with([
        'items' => $items
    ]);
});