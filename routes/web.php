<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Login
Route::get('login',[LoginController::class,'login'])->name('login');

// Register
Route::get('register',[RegisterController::class,'register'])->name('register');
Route::post('register/store',[RegisterController::class,'create'])->name('register.store');

Route::post('check_login',[LoginController::class,'check_login'])->name('check_login');
Route::get('logout',[LoginController::class,'logout']);

Route::get('home',[HomeController::class,'home']);

Route::get('list',[UserController::class,'index'])->name('user.list');
Route::get('pagination',[UserController::class,'pagination'])->name('pagination');

