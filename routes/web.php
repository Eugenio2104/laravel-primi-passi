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
    $saluto = 'Hello World';
    return view('home', compact('saluto'));
});

Route::get('/other-page', function () {
    $saluto2 = 'Other Page';
    return view('other-page', compact('saluto2'));
});
