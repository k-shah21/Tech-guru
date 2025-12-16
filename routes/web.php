<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
