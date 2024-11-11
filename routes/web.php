<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    KritikController,
    RegisterController,
    UserController,
    AuthController,
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

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});

Route::resource('users', UserController::class)->middleware('can:manage_users');

Route::controller(AuthController::class)->group(function () {
    Route::post('authenticate', 'authenticate')->name('login.authenticate');
    Route::post('logout', 'logout')->name('login.logout');
});
