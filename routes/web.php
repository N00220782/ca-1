<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\Artist_ShowController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');
    Route::post('/shows', [ShowController::class, 'store'])->name('shows.store');
    Route::get('/shows/create', [ShowController::class, 'create'])->name('shows.create');
    Route::get('/shows/{show}', [ShowController::class, 'show'])->name('shows.show');
    Route::get('/shows/{show}/edit', [ShowController::class, 'edit'])->name('shows.edit');
    Route::put('/shows/{show}', [ShowController::class, 'update'])->name('shows.update');
    Route::delete('/shows/{show}', [ShowController::class, 'destroy'])->name('shows.destroy');
    
    Route::get('/venues', [VenueController::class, 'index'])->name('venues.index');
    Route::post('/venues', [VenueController::class, 'store'])->name('venues.store');
    Route::get('/venues/create', [VenueController::class, 'create'])->name('venues.create');
    Route::get('/venues/{venue}', [VenueController::class, 'show'])->name('venues.show');
    Route::get('/venues/{venue}/edit', [VenueController::class, 'edit'])->name('venues.edit');
    Route::put('/venues/{venue}', [VenueController::class, 'update'])->name('venues.update');
    Route::delete('/venues/{venue}', [VenueController::class, 'destroy'])->name('venues.destroy');

    Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
    Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
    Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');
    Route::get('/artists/{artist}/edit', [ArtistController::class, 'edit'])->name('artists.edit');
    Route::put('/artists/{artist}', [ArtistController::class, 'update'])->name('artists.update');
    Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('artists.destroy');

    Route::get('/artist_shows', [Artist_ShowController::class, 'index'])->name('artist_shows.index');
    Route::post('/artist_shows', [Artist_ShowController::class, 'store'])->name('artist_shows.store');
    Route::get('/artist_shows/create', [Artist_ShowController::class, 'create'])->name('artist_shows.create');
    Route::get('/artist_shows/{artist_show}', [Artist_ShowController::class, 'show'])->name('artist_shows.show');
    Route::get('/artist_shows/{artist_show}/edit', [Artist_ShowController::class, 'edit'])->name('artist_shows.edit');
    Route::put('/artist_shows/{artist_show}', [Artist_ShowController::class, 'update'])->name('artist_shows.update');
    Route::delete('/artist_shows/{artist_show}', [Artist_ShowController::class, 'destroy'])->name('artist_shows.destroy');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
