<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login')->middleware('auth');

Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register')->middleware('auth');

Route::get('chirp/create', [ChirpController::class, 'create'])->name('chirp.create');

Route::get('chirp/index', [ChirpController::class, 'index'])->name('chirp.index');

Route::get('chirp/show/{chirp}', [ChirpController::class, 'show'])->name('chirp.show');

Route::get('chirp/edit/{chirp}', [ChirpController::class, 'edit'])->name('chirp.edit');

Route::get('auth/profile', [AuthController::class, 'profile'])->name('auth.profile');



