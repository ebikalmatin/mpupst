<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

// Page Route
// Route::get('/', [PageController::class, 'blankPage'])->middleware('verified');
Route::get('/', [HomeController::class, 'index']);
Route::get('/publics/profil', [HomeController::class, 'profil']);
Route::get('/publics/pen', [HomeController::class, 'pen']);
//ps
Route::get('/publics/pengolahansampah', [HomeController::class, 'ps']);
Route::get('/publics/pengolahansampah/landfill', [HomeController::class, 'landfill']);
Route::get('/publics/pengolahansampah/rdf', [HomeController::class, 'rdf']);
//progress
Route::get('/publics/progress/proyek', [HomeController::class, 'proyek']);
Route::get('/publics/progress/konstruksi', [HomeController::class, 'konstruksi']);
Route::get('/publics/progress/amdal', [HomeController::class, 'amdal']);
Route::get('/publics/progress/kajian', [HomeController::class, 'kajian']);
Route::get('/publics/progress/designbuild', [HomeController::class, 'designbuild']);

Route::get('/publics/kolaborasi', [HomeController::class, 'kolaborasi']);
Route::get('/publics/kontak', [HomeController::class, 'kontak']);

Route::get('/page-blank', [PageController::class, 'blankPage']);


// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Auth::routes(['verify' => true]);

// Auth based web middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/system/dashboard', [DashboardController::class, 'index']);
    Route::get('/system/users', [UserController::class, 'index']);
});
