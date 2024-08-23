<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    KritikController,
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');

//tambah route
Route::post('/movies/{film}/kritik', [KritikController::class, 'store'])->name('kritik.store');
Route::get('/movies/{kritik}/edit', [KritikController::class, 'edit'])->name('kritik.edit');
Route::put('/movies/{kritik}', [KritikController::class, 'update'])->name('kritik.update');
Route::get('/movies/{kritik}/show', [KritikController::class, 'show'])->name('kritik.show');
Route::delete('/movies/{kritik}', [KritikController::class, 'destroy'])->name('kritik.destroy');
Route::resource('film', FilmController::class)->parameters([
    'film' => 'film'
]);
