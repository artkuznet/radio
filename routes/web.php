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
    return view('index');
})->name('index');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/tracks', [\App\Http\Controllers\TrackController::class, 'index'])->middleware('auth');
