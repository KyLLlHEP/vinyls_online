<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/user', function () {
    return view('user');
});
// Route::get('/account', function () {
//     return view('account');
// });

Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/account/update-avatar', [AccountController::class, 'updateAvatar'])->name('account.updateAvatar');
