<?php

use App\Http\Controllers\Creator\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:creator'])
    ->prefix('creator')
    ->name('creator.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Series CRUD
        Route::resource('series', \App\Http\Controllers\Creator\SeriesController::class);

        // Nested Season CRUD under Series
        Route::resource('series.seasons', \App\Http\Controllers\Creator\SeasonController::class);

        // Nested Episode CRUD under Series > Season
        Route::resource('series.seasons.episodes', \App\Http\Controllers\Creator\EpisodeController::class);

        // Analytics
        Route::get('analytics', [\App\Http\Controllers\Creator\AnalyticsController::class, 'index'])->name('analytics.index');
        Route::get('analytics/seasons', [\App\Http\Controllers\Creator\AnalyticsController::class, 'seasons'])->name('analytics.seasons');
        Route::get('analytics/videos', [\App\Http\Controllers\Creator\AnalyticsController::class, 'videos'])->name('analytics.videos');
        Route::get('analytics/reviews', [\App\Http\Controllers\Creator\AnalyticsController::class, 'reviews'])->name('analytics.reviews');
        Route::get('analytics/watch-time', [\App\Http\Controllers\Creator\AnalyticsController::class, 'watchTime'])->name('analytics.watchtime');
    });
