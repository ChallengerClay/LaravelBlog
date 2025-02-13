<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Middleware\IsUserAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'getHome'])->name('home');
Route::get('about', [HomeController::class,'getAbout'])->name('about');
Route::get('contact', [HomeController::class,'getContact'])->name('contact');
Route::prefix('posts')->group(function(){
    Route::get('/{category?}',[HomeController::class,'getPosts'])->name('posts.public');
    Route::get('/{id}',[HomeController::class,'getPostDetail'])->name('post.public');
});

Route::get('categories', [HomeController::class,'getCategories'])->name('categories.public');
Route::middleware(CheckUserSession::class)->group(function (){
    Route::get('signup',[AuthController::class,'getSignup'])->name('signup.get');
    Route::post('signup',[AuthController::class,'postSignup']);

    Route::get('login',[AuthController::class,'getLogin'])->name('login.get');
    Route::post('login',[AuthController::class,'postLogin'])->name('login.post');
});

Route::get('logout',[AuthController::class,'getLogout'])->name('logout');

Route::middleware(IsUserAdmin::class)->group(function (){
    Route::prefix('admin')->group(function () {
        Route::get('/',[AdminController::class,'getIndex']);
        Route::resource('posts', PostController::class);
        Route::resource('categories', CategoryController::class);
    });
});


