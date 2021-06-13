<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminReportsController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminCustomersController;
use App\Http\Controllers\AdminPagesController;

// ADMIN ROUTES
Route::get('admin', [AdminDashboardController::class, 'index'])->middleware(['admin'])->name('admin');

Route::name('admin.')->prefix('admin')->middleware(['admin'])->group(function () {

    // Route::middleware(['admin'])->group(function () {
        Route::resource('/users', AdminUsersController::class);
        Route::resource('/customers', AdminCustomersController::class);
        Route::resource('/categories', AdminCategoriesController::class);
    // });

    Route::resource('/reports', AdminReportsController::class);
    Route::resource('/pages', AdminPagesController::class);
    Route::resource('/profile', AdminProfileController::class);

});

// Route::name('admin.')->prefix('admin')->middleware(['admin', 'employee'])->group(function () {

//     Route::resource('/reports', AdminReportsController::class);

// });