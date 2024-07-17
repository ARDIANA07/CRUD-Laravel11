<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//router category
Route::get('/kategori', [CategoryController::class, 'index']);
Route::post('/kategori/store', [CategoryController::class, 'store']);
Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit']);