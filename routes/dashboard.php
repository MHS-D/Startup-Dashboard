<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth','isVerified'])->group(function () {

    // dashboard Home
    Route::get('Home', [DashboardController::class,'index'])->name('dashboard');
    Route::get('Profile', [DashboardController::class,'profile'])->name('dashboard.profile');
    Route::get('Users', [DashboardController::class,'users'])->name('dashboard.users');
});









