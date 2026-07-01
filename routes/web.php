<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffController::class, 'dashboard'])
        ->name('staff.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])
        ->name('user.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::resource('room', RoomController::class);
});

Route::resource('staff', StaffController::class);

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('guests', GuestController::class);
    });

require __DIR__.'/auth.php';
