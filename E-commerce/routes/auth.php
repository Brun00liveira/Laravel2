<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('register', [RegisterController::class, 'register'])->name('register.register');

    Route::get('login', [loginController::class, 'show'])->name('login.show');
    Route::post('login', [loginController::class, 'login'])->name('login.login');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'show'])->name('password.show');
});
Route::middleware('auth')->group(function () {
    Route::get('home',[HomeController::class, 'show'])->name('home.show');
    Route::get('logout', [LogoutController::class, 'logout'])->name('logout.logout');

});
