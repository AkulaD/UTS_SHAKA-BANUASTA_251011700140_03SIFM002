<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/produk/{id}', [ProductController::class, 'show']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/tentang', function () { return view('page.about'); });
Route::get('/kontak', function () { return view('page.contact'); });
Route::get('/produk', [ProductController::class, 'index']);
