<?php

use Illuminate\Support\Facades\Route;
// 1. You must import your controller at the top
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// 2. Add this line to map the /products URL to your Controller
Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
