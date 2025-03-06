<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login']);



Route::get('/products', [ProductController::class, 'index']); // Show all products
Route::get('/products/{id}', [ProductController::class, 'show']); // Show a single product by ID
