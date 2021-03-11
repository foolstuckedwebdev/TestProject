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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wods', [App\Http\Controllers\HomeController::class, 'wods'])->name('wods');
Route::get('/workouts', [App\Http\Controllers\HomeController::class, 'workouts'])->name('workouts');
Route::get('/me', [App\Http\Controllers\HomeController::class, 'me'])->name('me');
