<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RekomendasiController;


Route::get('/', [CustomerController::class, 'index'])->name('customer.beranda');
Route::get('/rekomendasi', [CustomerController::class, 'rekomendasi'])->name('customer.rekomendasi');
Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('customer.rekomendasi');
Route::get('/lensa', [CustomerController::class, 'lensa'])->name('customer.lensa');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.detail');
Route::get('/tentang-kami', [CustomerController::class, 'tentangKami'])->name('customer.tentangKami');

Route::prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('login', [AuthController::class, 'authenticate'])->name('admin.authenticate');

        Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
        Route::post('/register', [AuthController::class, 'processRegister'])->name('admin.processRegister');
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store');
    });

    Route::middleware(['auth'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('produk', ProdukController::class)->names('admin.produk');

        Route::resource('users', AdminController::class)->names('admin.users');
    });
});
