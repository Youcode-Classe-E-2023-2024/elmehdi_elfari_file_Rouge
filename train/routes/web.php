<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class ,'welcome'])->name('home');

Route::post('logout', [LogoutController::class, 'destroy'])
    ->middleware('auth');
Route::get("register", [RegisterController::class, 'create'])->name('Form-register');

Route::post("register", [RegisterController::class, 'store'])->name('register');

Route::get("login", [LoginController::class, 'create'])->name('Form-login');

Route::post("login", [LoginController::class, 'authenticate'])->name('login');

Route::middleware('guest')->group(function () {
    Route::get('/request', [ForgotPasswordLinkController::class, 'create']);

    Route::post('/request', [ForgotPasswordLinkController::class, 'store']);

    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

    Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');
});
