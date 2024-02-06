<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'homePage'])->name('home');

Route::get('/anime', [ApiController::class, 'index'])->name('anime.index');

Route::get('/anime/{genres}', [ApiController::class, 'byGenres'])->name('anime.genres');

Route::get('/anime/id/{id}', [ApiController::class, 'show'])->name('anime.show');

