<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{project:slug}', [PageController::class, 'projectShow'])->name('portfolio.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

// Admin Routes (agar chahiye toh)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/messages', [PageController::class, 'adminMessages'])->name('admin.messages');
    Route::post('/admin/messages/{id}/read', [PageController::class, 'markAsRead'])->name('admin.messages.read');
    Route::delete('/admin/messages/{id}', [PageController::class, 'deleteMessage'])->name('admin.messages.delete');
});
