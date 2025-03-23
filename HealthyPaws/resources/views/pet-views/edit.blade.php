<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

// 🔹 Default homepage (Redirects to login)
Route::get('/', function () {
    return view('auth.login');
});

// 🔹 Public pages
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/pet', 'pet')->name('pet');

// ✅ USER ROUTES (Protected by 'auth' middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Pet and Schedule Management
    Route::resource('pets', PetController::class);
    Route::resource('schedules', ScheduleController::class);
});

// ✅ ADMIN AUTHENTICATION ROUTES
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware(['auth:admin'])->name('admin.')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        // Admin Dashboard
        Route::get('/dashboard', [AdminAuthController::class, 'index'])->name('dashboard');

        // Admin User Management (CRUD for Users)
        Route::resource('users', UserController::class)->except(['show']);
    });
});

// Load Laravel authentication routes
require __DIR__ . '/auth.php';
