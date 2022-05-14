<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/category');
});

Route::get('/category', [CategoryController::class, 'index']); // View
Route::get('/category/{id:id}', [CategoryController::class, 'edit']); // Edit
Route::post('/category', [CategoryController::class, 'store']); // Add
Route::put('/category/{id:id}', [CategoryController::class, 'update']); // Update
Route::delete('/category/{id:id}', [CategoryController::class, 'destroy']); // Delete

Route::get('/product', [ProductController::class, 'index']); // View
Route::get('/product/{id:id}', [ProductController::class, 'edit']); // Edit
Route::post('/product', [ProductController::class, 'store']); // Add
Route::put('/product/{id:id}', [ProductController::class, 'update']); // Update
Route::delete('/product/{id:id}', [ProductController::class, 'destroy']); // Delete


