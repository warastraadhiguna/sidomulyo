<?php

use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProdukController;
use App\Http\Controllers\HomeProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [HomeProdukController::class, 'index'])->name('produk');
Route::get('/profil', [HomeProfilController::class, 'index'])->name('profil');
Route::get('/client', [HomeClientController::class, 'index'])->name('client');

// Admin
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
    Route::resource('product', '\App\Http\Controllers\Admin\ProductController');
});

Auth::routes();