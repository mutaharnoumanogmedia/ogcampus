<?php

use App\Http\Controllers\Moderator\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:moderator'])
    ->prefix('moderator')
    ->name('moderator.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

