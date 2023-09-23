<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GetColonnesController;

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

Route::get('/', [Authentication::class, 'showLoginForm'])->name('LoginForm');
Route::post('/login', [Authentication::class, 'login'])->name('login');
Route::post('/signup', [Authentication::class, 'signup'])->name('signup');
Route::get('/logout', [Authentication::class, 'logout'])->name('logout');
Route::get('/signup', [Authentication::class, 'showInscription'])->name('LoginSingup');

Route::middleware('auth')->group(function () {
    Route::get('/Fiche', [DashboardController::class, 'showFiche'])->name('Fiche');
    Route::get('/Liste', [DashboardController::class, 'showListe'])->name('Liste');
    Route::get('/getColonnes/{table}', [GetColonnesController::class, 'getColonnes']);
    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Messages', [DashboardController::class, 'showMessages'])->name('Messages');
    Route::post('/modify/artisan', [ArtisanController::class, 'modify'])->name('modifyartisan');
    Route::post('/create/artisan', [ArtisanController::class, 'create'])->name('create-artisan');
    Route::get('/Calendrier', [DashboardController::class, 'showCalendrier'])->name('Calendrier');
    Route::get('/show/artisan/{artisan}', [ArtisanController::class, 'show'])->name('show-artisan');
    Route::post('/show/artisan/search', [ArtisanController::class, 'searchartisan'])->name('search-artisan');
    Route::get('/show/artisan/delete/{artisan}', [ArtisanController::class, 'delete'])->name('delete-artisan');
    Route::get('/showSearchAdvanced', [ArtisanController::class, 'showSearchAdvanced'])->name('showSearchAdvanced');
    Route::get('/modify/show/artisan/{artisan}', [ArtisanController::class, 'showmodifyartisan'])->name('show-modify-artisan');
    Route::post('/show/artisan/SearchAdvanced', [ArtisanController::class, 'searchartisanavanced'])->name('search-artisan-avanced');
});
