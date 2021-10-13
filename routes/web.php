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
    Route::get('/admin/dashboard', [BackendController::class, 'index'])       ->middleware('can:admin');
    Route::get('/admin/posts', [BackendController::class, 'posts'])           ->middleware('can:admin');
    Route::get('/admin/users', [BackendController::class, 'users'])           ->middleware('can:admin');

    Route::middleware(['can:admin'])->group(function () {
        Route::resource('/admin/categories', CategoriesController::class)->except('show');
        Route::resource('/admin/posts', BackendController::class)->except('index');
    });



// Session Routes
    Route::post('/sessions', [SessionsController::class, 'store'])  ->middleware('guest');
    Route::get('/login', [SessionsController::class, 'create'])     ->middleware('guest');
    Route::post('/logout', [SessionsController::class, 'destroy'])  ->middleware('auth');

    Route::get('/register',[RegisterController::class, 'create'])   ->middleware('guest');
    Route::post('/register',[RegisterController::class, 'store'])   ->middleware('guest');

// Newsletter routes
    Route::post('/newsletter', NewsletterController::class);
