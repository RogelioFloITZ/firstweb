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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/services', 'services')->name('services');
Route::view('/single-project', 'single-project')->name('single-project');
Route::view('/single-project2', 'single-project2')->name('single-project2');
Route::view('/single-project3', 'single-project3')->name('single-project3');

// contact me
Route::view('/contact', 'contact')->name('contact');
