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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('backend/user', [App\Http\Controllers\UserController::class, 'index'])
    ->name('backend.user.index');

Route::get('backend/user/createUpdate', [App\Http\Controllers\UserController::class, 'createUpdate'])
    ->name('backend.user.createUpdate');

Route::post('backend/user/store', [App\Http\Controllers\UserController::class, 'store'])
    ->name('backend.user.store');