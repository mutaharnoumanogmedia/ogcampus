// Creators routes
Route::get('/creators', [WebsiteController::class, 'creators'])->name('website.creators');
Route::get('/creators/{id}', [WebsiteController::class, 'creatorDetail'])->name('website.creator.detail');
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

// Browsing Routes
Route::get('/browse', [WebsiteController::class, 'browse'])->name('website.browse');
Route::get('/browse/genres', [WebsiteController::class, 'browseGenres'])->name('website.browse.genres');
Route::get('/browse/genre/{slug}', [WebsiteController::class, 'browseGenre'])->name('website.browse.genre');

Route::get('/series/{slug}', [WebsiteController::class, 'series'])->name('website.series.show');


// Routes for Seasons (in WebsiteController)
Route::get('/seasons', [WebsiteController::class, 'seasons'])->name('website.seasons.index');
Route::get('/seasons/{slug}', [WebsiteController::class, 'season'])->name('website.seasons.show');


Route::get('/seasons/{season_slug}/episodes', [WebsiteController::class, 'episodes'])->name('website.seasons.episodes.index');
Route::get('/seasons/{season_slug}/episodes/{episode_slug}', [WebsiteController::class, 'episode'])->name('website.seasons.episodes.show');



Route::get('/browse/categories', [WebsiteController::class, 'browseCategories'])->name('browse.categories');
Route::get('/browse/category/{slug}', [WebsiteController::class, 'browseCategory'])->name('browse.category');




Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->hasRole('creator')) {
        return redirect()->route('creator.dashboard');
    } elseif ($user->hasRole('user')) {
        return redirect()->route('user.dashboard');
    }

    abort(403, 'Unauthorized');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'de'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');



require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
require __DIR__ . '/moderator.php';
require __DIR__ . '/creator.php';
require __DIR__ . '/user.php';
require __DIR__ . '/subscription.php';
