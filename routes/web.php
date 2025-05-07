<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rute publik yang bisa diakses tanpa login
Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin', AdminController::class);
});
Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::resource('seller', SellerController::class);
});
Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::resource('customer', CustomerController::class);
});
// Include rute auth
require __DIR__.'/auth.php';