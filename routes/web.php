<?php

use App\Http\Controllers\Web\Pages\AboutController;
use App\Http\Controllers\Web\Pages\ContactController;
use App\Http\Controllers\Web\Pages\HomeController;
use App\Http\Controllers\Web\Pages\ProductsController;
use App\Http\Controllers\Web\Pages\ServicesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [AboutController::class, 'index'])->name('about');
Route::get('/servicios', [ServicesController::class, 'index'])->name('services');
Route::get('/productos', [ProductsController::class, 'index'])->name('products');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto/enviar', [ContactController::class, 'send'])->name('contact.send');

// Route::prefix('en')->group(function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('/about-us', [AboutController::class, 'index'])->name('about');
//     Route::get('/services', [ServicesController::class, 'index'])->name('services');
//     Route::get('/products', [ProductsController::class, 'index'])->name('products');
//     Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// });
