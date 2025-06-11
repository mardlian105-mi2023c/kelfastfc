<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::resource('player', PlayerController::class);
Route::get('/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/admin', [PostController::class, 'admin'])->name('admin');
Route::resource('posts', PostController::class)->except(['index']);
Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/squad', [PlayerController::class, 'squad'])->name('squad');
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/products.create', 'products.create')->name('products.create');
Route::resource('products', ProductController::class);
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';