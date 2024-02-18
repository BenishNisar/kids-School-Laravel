<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCon;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/facility', function () {
    return view('facility');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/call-to-action', function () {
    return view('call-to-action');
});

Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home1', [HomeCon::class,'index']);