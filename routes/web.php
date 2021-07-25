<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

// Anasayfa
Route::get('/', function () {
    return view('home');
})->name('home');

// Kayıt Sayfası
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

// Giriş Sayfası
Route::get('login', [LoginController::class, 'create'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

// Blog Sayfası
Route::get('blogs', [PostController::class, 'index']);
Route::get('blogs/{post:slug}', [PostController::class, 'show']);

// Admin Sayfası
Route::get('admin-panel', [AdminController::class, 'index'])->middleware('admin');
