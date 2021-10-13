<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsletterController;

// Frontend Routes
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Backend (Admin) Routes
    Route::middleware(['can:admin'])->group(function () {
        Route::get('/admin/dashboard', [BackendController::class, 'index']);
        Route::get('/admin/posts', [BackendController::class, 'posts']);
        Route::get('/admin/users', [BackendController::class, 'users']);
        Route::resource('/admin/categories', CategoriesController::class)->except('show');
        Route::resource('/admin/posts', BackendController::class)->except('index');
    });

// Session Routes
    Route::middleware(['guest'])->group(function () {
        Route::post('/sessions', [SessionsController::class, 'store']);
        Route::get('/login', [SessionsController::class, 'create']);
        Route::get('/register',[RegisterController::class, 'create']);
        Route::post('/register',[RegisterController::class, 'store']);
    });
    Route::post('/logout', [SessionsController::class, 'destroy'])  ->middleware('auth');


// Newsletter routes
    Route::post('/newsletter', NewsletterController::class);
