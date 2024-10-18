<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/generator-maintenance-services', [PageController::class, 'services']);
Route::get('/media', [PageController::class, 'media']);
Route::get('/contact-us', [PageController::class, 'contact']);

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/products/{product:slug}', [ShopController::class, 'show'])->name('shop.show');

Route::get('/about-sheba-energy-power', [PageController::class, 'about']);

Route::get('/perkins', [CategoryController::class, 'perkins']);
Route::get('/cummins', [CategoryController::class, 'cummins']);
Route::get('/hyundai', [CategoryController::class, 'hyundai']);
Route::get('/deutz', [CategoryController::class, 'deutz']);
Route::get('/ricardo', [CategoryController::class, 'ricardo']);
Route::get('/portable-gasoline-generator', [CategoryController::class, 'gasoline']);

Route::redirect('/admin', '/dashboard');

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    
    Route::name('dashboard.')->group(function () {
        Route::resource('/products', ProductController::class);
        Route::resource('/users', UserController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
