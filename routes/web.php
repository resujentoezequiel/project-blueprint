<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingPageController;

//Route::view('/', 'welcome');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::get('/', [LandingPageController::class, 'index'])
    ->middleware(['auth'])
    ->name('blade_view.landing_page');

Route::get('landing_page', [LandingPageController::class, 'index'])
    ->middleware(['auth'])
    ->name('landing_page');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);











require __DIR__.'/auth.php';


