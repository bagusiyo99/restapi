<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts',  [PostController::class, 'index']);
Route::get('/posts/{id}',  [PostController::class, 'show']);
