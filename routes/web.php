<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/squad', function () {
    return view('squad');
});

Route::resource('player', PlayerController::class);

Route::view('/admin', 'admin')->name('admin');
Route::get('/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/admin', [PostController::class, 'admin'])->name('admin');
Route::resource('posts', PostController::class)->except(['index']);
Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/squad', [PlayerController::class, 'squad'])->name('squad');
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('admin_video', VideoController::class);
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');

Route::view('/products.create', 'products.create')->name('products.create');
Route::resource('products', ProductController::class);
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

Route::get('/admin_home.index', [HomeController::class, 'index'])->name('admin_home.index');
Route::get('/admin_home.show/{id}', [HomeController::class, 'show'])->name('admin_home.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';