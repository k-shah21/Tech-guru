<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'user'])->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Contact
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::delete('/admin/contactId=/{contact}', [ContactController::class, 'delete'])->name('contacts.delete');

// News Letter
Route::post('/', [NewsLetterController::class, 'store'])->name('newsletter.store');
Route::delete('/newsletter/{id}', [NewsLetterController::class, 'destroy'])
    ->name('newsletter.delete');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

// Blogs
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blog.index');

Route::get('/admin/blog/create', [BlogController::class, 'show'])->name('blog.show');

Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blog.store');

Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

Route::put('/admin/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/admin/blog/{id}/delete', [BlogController::class, 'delete'])->name('blog.delete');

Route::get('/blogs', [BlogController::class, 'all'])->name('blog.all');

Route::get('/blog-details/{slug}', [BlogController::class, 'showBlogDetails'])->name('blog.showBlogDetails');

// Auth
// Login
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest');

// Logout
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

// Logout User
Route::post('/logout', [LoginController::class, 'logout']);


// Site Map
Route::post('/admin/sitemap', [SitemapController::class, 'generateSitemap']);
