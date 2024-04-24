<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VinylController;
use App\Http\Controllers\VinylCatalogController;


Route::get('/', function () {
    return view('index');
})->name('index');
// Register use controller from Fortify
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/register', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->middleware('guest');

// User profile
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::post('/account/update-avatar', [AccountController::class, 'updateAvatar'])->name('account.updateAvatar');
});

// Check has route /user (if needed)
Route::get('/user', function () {
    return view('user');
})->middleware('auth');
//
Route::get('/auth-choice', function () {
    return view('auth-choice');
})->name('auth-choice');
//
Route::get('/register', function () {
    return view('register');
});
//
Route::get('/user', function () {
    return view('user');
});
//
Route::get('/userLogin', function () {
    return view('userLogin');
})->name('login');
//
Route::get('/addVinyls', function () {
    return view('addVinyls');
})->name('addVinyls');
//
Route::get('/vinylCatalog', function () {
    return view('vinylCatalog');
})->name('vinylCatalog');
//

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/account/update-avatar', [AccountController::class, 'updateAvatar'])->name('account.updateAvatar');
Route::middleware(['auth:sanctum', 'verified'])->get('/account', [AuthController::class, 'account'])->name('account');
Route::post('/userLogin', [LoginController::class, 'login']);
Route::post('/submitVinyl', [VinylController::class, 'store'])->name('submitVinyl')->middleware('auth');
Route::get('/vinylCatalog', [VinylCatalogController::class, 'index'])->name('vinylCatalog');

