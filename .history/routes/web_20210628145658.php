<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;

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

Route::get('/user/show/{user}',  [App\Http\Controllers\UsersController::class, 'show'])->name('user_show');

Route::get('/user/edit/{user}',  [App\Http\Controllers\UsersController::class, 'edit'])->name('user_edit');

Route::get('/user/edit/{user}',  [App\Http\Controllers\UsersController::class, 'edit'])->name('user_edit');

Route::put('/user/edit/{user}',  [App\Http\Controllers\UsersController::class, 'update'])->name('user_update');

Route::put('/user/edit/password/{user}',  [App\Http\Controllers\UsersController::class, 'update'])->name('user_update_password');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
