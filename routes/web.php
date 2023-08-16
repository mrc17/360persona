<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\DashboardController;

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
Route::post('/logout', [Authentication::class, 'logout'])->name('logout');
Route::get('/signup', [Authentication::class, 'showInscription'])->name('LoginSingup');
Route::post('/signup', [Authentication::class, 'signup'])->name('signup');

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});
