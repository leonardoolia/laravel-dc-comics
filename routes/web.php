<?php

use App\Http\Controllers\ComicController;
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
    return view('home');
})->name('home');

// Rotta per lista fumetti
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Rotta per l'aggiunta fumetto
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Rotta per singolo fumetto
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Rotta per modificare fumetto
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Rotta per il salvataggio del fumetto nuovo
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Rotta per salvataggio fumetto modificato
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Rotta per eliminazione del fumetto
Route::delete('comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
