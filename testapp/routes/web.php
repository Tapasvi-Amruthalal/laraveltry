<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\showlist;
use App\http\Controllers\display;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'index');
Route::view('/show', 'show');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/db', function () {
    return view('db');
});
// Route::get('/song', function () {
//     return view('song');
// });

Route::get('show',[showlist::class,'show']);
Route::view('login', 'login');
Route::post("user",[login::class, 'userLogin']);
Route::get("song",[display::class, 'show']);