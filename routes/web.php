<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/collections', [ProductController::class, 'index'])->name('collections');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/consultation', [PageController::class, 'consultation'])->name('consultation');
Route::post('/consultation', [ContactController::class, 'consultation'])->name('consultation.store');

Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter.store');
