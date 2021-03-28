<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\regController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\postController;
use App\Http\Controllers\likeController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [dashController::class, 'index'])
    ->name('dashboard');

Route::post('/logout', [logoutController::class, 'store'])->name('logout');

Route::get('/register', [regController::class, 'index'])->name('register');
Route::post('/register', [regController::class, 'store']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/posts', [postController::class, 'index'])->name('posts');
Route::post('/posts', [postController::class, 'store']);

Route::post('/posts/{post}/likes', [likeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [likeController::class, 'destroy'])->name('posts.likes');