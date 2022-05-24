<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
*/

//logout
Route::get('Logout', [AuthController::class,'logout'])->name('logout');

Route::middleware(['AuthUser'])->group(function () {

    //Login
    Route::get('Login', [AuthController::class,'loginView'])->name('login');
    Route::post('Login-action', [AuthController::class,'login'])->name('login.action');

    //Register
    Route::get('Register', [AuthController::class,'registerView'])->name('register');
    Route::post('Register-action', [AuthController::class,'register'])->name('register.action');

    //Forget Password
    Route::get('Forget-Password', [AuthController::class,'forgetPasswordView'])->name('forgetPassword');
    Route::post('Forget-Password-action', [AuthController::class,'forgetPassword'])->name('forgetPassword.action');

    //Reset password
    Route::get('Reset-Password/{token}', [AuthController::class,'resetPasswordView'])->name('resetPassword');
    Route::post('Reset-Password-action', [AuthController::class,'resetPassword'])->name('resetPassword.action');

});

    // resend email
    Route::post('Resend-Email', [AuthController::class,'resendEmail'])->name('auth.resendEmail');
    // email verification
    Route::get('verify-account/{token}', [AuthController::class,'verifyAccount'])->name('auth.verifyEmail');

