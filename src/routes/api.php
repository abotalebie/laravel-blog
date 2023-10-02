<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/blog')->group(function () {
    Route::get('/', [\Aboutalebi\LaravelBlog\Http\Controllers\PostController::class, 'index']);
});
