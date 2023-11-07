<?php
//Importing controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\VenueController;
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

//Welcome view is displayed before logging in
Route::get('/', function () {
    return view('welcome');
});

//Dashboard view is displayed only when logged in, on all views
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //All CRUD views for the shows table, only displayed when logged in
    Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');
    Route::post('/shows', [ShowController::class, 'store'])->name('shows.store');
    Route::get('/shows/create', [ShowController::class, 'create'])->name('shows.create');
    Route::get('/shows/{show}', [ShowController::class, 'show'])->name('shows.show');
    Route::get('/shows/{show}/edit', [ShowController::class, 'edit'])->name('shows.edit');
    Route::post('/shows/{show}', [ShowController::class, 'update'])->name('shows.update');
    Route::delete('/shows/{show}', [ShowController::class, 'destroy'])->name('shows.destroy');
    
    //All CRUD views for the venues table, only displayed when logged in
    Route::get('/venues', [VenueController::class, 'index'])->name('venues.index');
    Route::post('/venues', [VenueController::class, 'store'])->name('venues.store');
    Route::get('/venues/create', [VenueController::class, 'create'])->name('venues.create');
    Route::get('/venues/{venue}', [VenueController::class, 'show'])->name('venues.show');
    Route::get('/venues/{venue}/edit', [VenueController::class, 'edit'])->name('venues.edit');
    Route::put('/venues/{venue}', [VenueController::class, 'update'])->name('venues.update');
    Route::delete('/venues/{venue}', [VenueController::class, 'destroy'])->name('venues.destroy');

    //All CRUD views for the artists table, only displayed when logged in
    Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
    Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
    Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');
    Route::get('/artists/{artist}/edit', [ArtistController::class, 'edit'])->name('artists.edit');
    Route::post('/artists/{artist}', [ArtistController::class, 'update'])->name('artists.update');
    Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('artists.destroy');

    //Editing and deleting profile views, only displayed when logged in as being logged in is
    //necessary to edit and delete your profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
