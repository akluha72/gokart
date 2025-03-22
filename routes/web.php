<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GokartController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Group routes with prefix and middleware
Route::prefix('gokart')->controller(GokartController::class)->group(function () {
    Route::get('/tracks', 'index')->name('tracks.index');
    Route::get('/tracks/{id}', 'show')->name('tracks.show');
    Route::get('/tracks/create', 'create')->name('tracks.create');
    Route::post('/tracks', 'store')->name('tracks.store');
    Route::get('/tracks/{id}/edit', 'edit')->name('tracks.edit');
    Route::put('/tracks/{id}', 'update')->name('tracks.update');
    Route::delete('/tracks/{id}', 'destroy')->name('tracks.destroy');
});__DIR__ . '/auth.php';
