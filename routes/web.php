<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::POST('/posts', [PostController::class, 'store'])->name('posts.store');
Route::GET('/posts/novo', [PostController::class, 'create'])->name('posts.create');
Route::GET('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
