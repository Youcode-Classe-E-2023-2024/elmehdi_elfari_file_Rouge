<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class ,'welcome'])->name('home');

Route::post('logout', [LogoutController::class, 'destroy'])
    ->middleware('auth');
Route::get("register", [RegisterController::class, 'create'])->name('Form-register');

Route::post("register", [RegisterController::class, 'store'])->name('register');

Route::get("login", [LoginController::class, 'create'])->name('Form-login');

Route::post("login", [LoginController::class, 'authenticate'])->name('login');


Route::get('/request', [ForgotPasswordLinkController::class, 'create']);

Route::post('/request/store', [ForgotPasswordLinkController::class, 'store'])->name('request.store');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');




Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');

Route::get('/dashboard/table', [DashboardController::class ,'table'])->name('table');

Route::get('/dashboard/reservation', [DashboardController::class ,'reservation'])->name('reservation');

/*Route::get('/dashboard/city', [CityController::class ,'city'])->name('city');*/
Route::get('/dashboard/city', [CityController::class, 'index'])->name('city');

Route::get('/dashboard/city/create', [CityController::class, 'create'])->name('create.city');

Route::post('/dashboard/city', [CityController::class, 'store'])->name('city');

Route::get('/dashboard/city/{city}', [CityController::class, 'show'])->name('show.city');

Route::get('/dashboard/city/{city}/edit', [CityController::class, 'edit'])->name('city.edit');

Route::put('/dashboard/city/{city}', [CityController::class, 'update'])->name('update.city');

Route::delete('/dashboard/city/{city}', [CityController::class, 'destroy'])->name('city.destroy');
