<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//router login
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'post_login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    //router home
    Route::get('/home', [HomeController::class, 'index']);

    //router category
    Route::get('/kategori', [CategoryController::class, 'index']);
    Route::post('/kategori/store', [CategoryController::class, 'store']);
    Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/kategori/{id}', [CategoryController::class, 'update']);
    Route::get('/kategori/{id}', [CategoryController::class, 'destroy']);
});