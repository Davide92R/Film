<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
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

Route::get('/film', [FilmController::class, 'createFilm'])->name('createfilm');
Route::post('/film/store', [FilmController::class, 'storeFilm'])->name('storeFilm');

Route::get('/formFilm', [FilmController::class, 'indexFilm'])->name('indexFilm');
