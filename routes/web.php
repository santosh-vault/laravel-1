<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'home']);

Route::get('/shop', function () {
    return view('shop');
});


Route::middleware('auth')->group(function () {

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

    Route::post('/cateogry/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/cateogry/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');

    Route::post('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');

    Route::get('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');

    // Product

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::POST('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
