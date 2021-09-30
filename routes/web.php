<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


// Frontend Routes
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('posts/{post:slug}', [PostController::class, 'show']);


// Session Routes
    Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
    Route::post('/register',[RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/logout', [SessionsController::class, 'destroy']);
