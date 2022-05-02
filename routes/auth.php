<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
*/

//Login
Route::get('Login', [AuthController::class,'loginView'])->name('login');

//Register
Route::get('Register', [AuthController::class,'RegisterView'])->name('register');
Route::post('Register-action', [AuthController::class,'Register'])->name('register.action');


//Forget Password
Route::get('Forget-Password', [AuthController::class,'ForgetPasswordView'])->name('forgetPassword');
