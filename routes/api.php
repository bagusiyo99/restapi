<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthenticationController;

Route::get('/posts',  [PostController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}',  [PostController::class, 'show'])->middleware(['auth:sanctum']);
Route::get('/posts2/{id}',  [PostController::class, 'show2']);

Route::post('/login',  [AuthenticationController::class, 'login']);
Route::get('/logout',  [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
Route::get('/me',  [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);
