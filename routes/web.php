<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/squad', function () {
    return view('squad');
});

Route::view('/admin', 'admin')->name('admin');
Route::get('/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/admin', [PostController::class, 'admin'])->name('admin');
Route::resource('posts', PostController::class)->except(['index']);
Route::get('/blog', [PostController::class, 'blog'])->name('blog');

Route::resource('admin_video', VideoController::class);
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');

Route::view('/products.create', 'products.create')->name('products.create');
Route::resource('products', ProductController::class);
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

Route::resource('admin_home', HomeController::class)->parameters([
    'admin_home' => 'postHome'
]);
Route::get('/admin_home.index', [HomeController::class, 'index'])->name('admin_home.index');
Route::get('/admin_home.show/{id}', [HomeController::class, 'show'])->name('admin_home.show');
// Route::get('/admin_home', [HomeController::class, 'index'])->name('admin_home.index');
// Route::get('/admin_home/create', [HomeController::class, 'create'])->name('admin_home.create');
// Route::post('/admin_home', [HomeController::class, 'store'])->name('admin_home.store');
// Route::get('/admin_home/{post}', [HomeController::class, 'show'])->name('admin_home.show');
// Route::get('/admin_home/{post}/edit', [HomeController::class, 'edit'])->name('admin_home.edit');
// Route::put('/admin_home/{post}', [HomeController::class, 'update'])->name('admin_home.update');
// Route::delete('/admin_home/{post}', [HomeController::class, 'destroy'])->name('admin_home.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';