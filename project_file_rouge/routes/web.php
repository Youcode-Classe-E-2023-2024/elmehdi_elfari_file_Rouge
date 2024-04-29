<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PromoResarvationController;
use App\Http\Controllers\PromosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class ,'welcome'])->name('home');

Route::middleware('auth')->group(function (){
    Route::post('logout', [LogoutController::class, 'destroy']);

    Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');

    Route::get('/dashboard/table', [DashboardController::class ,'table'])->name('table');

    Route::put('/dashboard/users/{user}/toggleStatus', [DashboardController::class ,'toggleStatus'])->name('users.toggleStatus');

    Route::get('/dashboard/reservation', [DashboardController::class ,'reservation'])->name('reservation');

    Route::get('/Parcours', [ParcoursController::class, 'index'])->name('Parcours');

    Route::post('/Parcours', [ParcoursController::class, 'store'])->name('Parcours.store');

    Route::get('/dashboard/parcour/create', [ParcoursController::class, 'create'])->name('create.parcours');

    Route::delete('/parcours/{parcours}', [ParcoursController::class, 'destroy'])->name('parcours.destroy');

    Route::get('/cities', [CityController::class, 'index'])->name('city');

    Route::get('/cities/create', [CityController::class, 'create'])->name('city.create');

    Route::post('/cities', [CityController::class, 'store'])->name('city.store');

    Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('city.edit');

    Route::put('/cities/{city}', [CityController::class, 'update'])->name('city.update');

    Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('city.destroy');

    Route::get('/dashboard/Promos', [PromosController::class, 'index'])->name('Promos');

    Route::post('/dashboard/Promos', [PromosController::class, 'store'])->name('Promos.store');

    Route::get('/dashboard/Promos/create', [PromosController::class, 'create'])->name('create.Promos');

    Route::delete('/Promos/{Promos}', [PromosController::class, 'destroy'])->name('Promos.destroy');

    Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');

    Route::post('/session/{parcours}', [StripeController::class, 'createSession'])->name('session');

    Route::get('/success', [StripeController::class, 'success'])->name('success');

    Route::get('/dashboard/Reservation', [ReservationController::class ,'index'])->name('Reservation.show');

    Route::get('/dashboardReservation/{parcours}', [ReservationController::class ,'store'])->name('Reservation');

});

Route::get("register", [RegisterController::class, 'create'])->name('Form-register');

Route::post("register", [RegisterController::class, 'store'])->name('register');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('Form-login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login');
});


Route::get('/request', [ForgotPasswordLinkController::class, 'create']);

Route::post('/request/store', [ForgotPasswordLinkController::class, 'store'])->name('request.store');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');

Route::get('/search', [HomeController::class, 'search']);

Route::get('/searchTicket', [HomeController::class, 'searchTicket']);

Route::post('/send-email', [SendMailController::class, 'store'])->name('send-email');

Route::get('/Promos', [PromosController::class, 'Promos'])->name('promos');

Route::get('/ticket', [TicketController::class ,'ticket'])->name('ticket');

Route::get('/Ticket_Promos/{id}', [TicketController::class, 'ticketPromos'])->name('ticket.Promos');




