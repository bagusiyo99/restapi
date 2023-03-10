<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CommentController;

// contoh middleware satu
// Route::get('/me',  [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);



// contoh middleware di grup agar rapi
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout',  [AuthenticationController::class, 'logout']);
    Route::get('/me',  [AuthenticationController::class, 'me']);
    Route::post('/posts',  [PostController::class, 'store']);
    Route::patch('/posts/{id}',  [PostController::class, 'update'])->middleware('Pemilikpostingan');
    Route::delete('/posts/{id}',  [PostController::class, 'destory'])->middleware('Pemilikpostingan');

        Route::post('/comment',  [CommentController::class, 'store']);


});

Route::get('/posts',  [PostController::class, 'index']);
Route::get('/posts/{id}',  [PostController::class, 'show']);
// Route::get('/posts2/{id}',  [PostController::class, 'show2']);


Route::post('/login',  [AuthenticationController::class, 'login']);
