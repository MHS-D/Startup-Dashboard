<?php

use App\Http\Controllers\Errors\ErrorsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Errors Routes
|--------------------------------------------------------------------------
|
*/


// unverified email
Route::get('Verify-Email', [ErrorsController::class,'unverifiedEmail'])->name('errors.unverified');









