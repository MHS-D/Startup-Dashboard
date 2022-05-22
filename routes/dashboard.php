<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth'])->group(function () {

    // dashboard Home
    Route::get('Home', [DashboardController::class,'index'])->name('dashboard');
});









