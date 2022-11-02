<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/film', [FilmController::class, 'createFilm'])->name('createFilm');
Route::post('/film/store', [FilmController::class, 'storeFilm'])->name('storeFilm');

Route::get('/film/index', [FilmController::class, 'indexFilm'])->name('indexFilm');

// Rotta parametrica per il film
Route::get('/film/{film}', [FilmController::class,'detFilm'])->name('detFilm');

// Rotta get per la modifica della risorsa
Route::get('/film/edit/{film}', [FilmController::class, 'editFilm'])->name('editFilm');
// Rotta put per la modifica del film PARAMETRICA
Route::put('/film/update/{film}', [FilmController::class, 'upadateFilm'])->name('updateFilm');
// Rotta delete per eliminare la risorsa
Route::delete('/film/delete/{film}', [FilmController::class, 'deleteFilm'])->name('deleteFilm');
// Rotta per il profilo utente
Route::get('/user', [ProfileController::class, 'user'])->name('user');

Route::post('/user/profile-post', [ProfileController::class,'storeProfile'])->name('storeProfile');