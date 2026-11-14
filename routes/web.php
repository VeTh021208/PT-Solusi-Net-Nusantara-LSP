<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [PageController::class, 'about'])->name('about');

Route::get('/layanan', [ProductController::class, 'index'])->name('products.index');
Route::get('/layanan/{product:slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

// Autentikasi pelanggan (bukan panel admin)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/langganan-saya', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::post('/layanan/{product:slug}/berlangganan', [SubscriptionController::class, 'store'])->name('subscriptions.store');
});
