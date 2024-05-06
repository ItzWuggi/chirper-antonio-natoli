<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login')->middleware('auth');

Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register')->middleware('auth');
