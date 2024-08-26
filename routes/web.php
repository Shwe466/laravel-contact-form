<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Show the contact form
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// Show the confirmation page
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

// Handle the form submission
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Show the success message page
Route::get('/contact/success', [ContactController::class, 'success'])->name('contact.success');