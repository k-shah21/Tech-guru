<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;


// Admin Routes ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Admin Routes 

Route::middleware(['auth'])->group(function () {

    // Dashboard =============================

    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Delete Contact
    Route::delete('/admin/contactId=/{contact}', [ContactController::class, 'delete'])->name('contacts.delete');


    // Delete News Letter
    Route::delete('/newsletter/{id}', [NewsLetterController::class, 'destroy'])
        ->name('newsletter.delete');

    // Dashboard =============================



    // Blogs =============================

    // Blogs Listings 
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blog.index');

    // Show Blog Form
    Route::get('/admin/blog/create', [BlogController::class, 'show'])->name('blog.show');

    // Store Blog Data
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blog.store');

    // Show Edit Blog Form
    Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

    // Store Updated Blog
    Route::put('/admin/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');

    // Delete Blog
    Route::delete('/admin/blog/{id}/delete', [BlogController::class, 'delete'])->name('blog.delete');

    // Blogs =============================



    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])
        ->middleware('auth')
        ->name('logout');


    // Site Map==========================

    // Site Map
    Route::post('/admin/sitemap', [SitemapController::class, 'generateSitemap']);

    // Site Map==========================
});


// Admin Routes ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Admin Routes 



// Auth ==============================

// Login Form
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Store User Login 
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest');

// Auth ==============================



// Public Routes ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Public Routes 


// Home Page
Route::get('/', [BlogController::class, 'user'])->name('home');

// Store Contact Form Data
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// News Letter
Route::post('/', [NewsLetterController::class, 'store'])->name('newsletter.store');



// Blogs =============================

// Api For Blogs
Route::get('/blogs', [BlogController::class, 'all'])->name('blog.all');

// Show Blogs Details Page
Route::get('/blog-details/{slug}', [BlogController::class, 'showBlogDetails'])->name('blog.showBlogDetails');

// Blogs =============================



// Public Routes ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Public Routes 
